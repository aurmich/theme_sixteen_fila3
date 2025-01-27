<?php

declare(strict_types=1);

namespace Modules\Geo\Actions\GoogleMaps;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Collection;
use Modules\Geo\Datas\LocationData;

use function Safe\json_decode;

/**
 * Action per calcolare la matrice delle distanze tra punti usando Google Maps Distance Matrix API.
 */
class CalculateDistanceMatrixAction
{
    private const API_URL = 'https://maps.googleapis.com/maps/api/distancematrix/json';

    public function __construct(
        private readonly Client $client,
    ) {
    }

    /**
     * Calcola la matrice delle distanze tra punti di origine e destinazione.
     *
     * @param Collection<int, LocationData> $origins      Punti di origine
     * @param Collection<int, LocationData> $destinations Punti di destinazione
     *
     * @throws \RuntimeException Se la richiesta fallisce o la risposta non è valida
     *
     * @return array<array<array{
     *     distance: array{text: string, value: int},
     *     duration: array{text: string, value: int},
     *     status: string
     * }>>
     */
    public function execute(Collection $origins, Collection $destinations): array
    {
        try {
            $response = $this->makeApiRequest($origins, $destinations);
            $parsedResponse = $this->parseResponse($response);

            if (empty($parsedResponse)) {
                throw new \RuntimeException('La risposta della matrice delle distanze è vuota o non valida.');
            }

            return $parsedResponse;
        } catch (GuzzleException $e) {
            throw new \RuntimeException('Failed to calculate distance matrix: '.$e->getMessage());
        }
    }

    /**
     * @param Collection<int, LocationData> $origins
     * @param Collection<int, LocationData> $destinations
     *
     * @throws GuzzleException
     */
    private function makeApiRequest(Collection $origins, Collection $destinations): string
    {
        $originsString = $origins->map(
            fn (LocationData $location): string => sprintf('%f,%f', $location->latitude, $location->longitude)
        )->join('|');

        $destinationsString = $destinations->map(
            fn (LocationData $location): string => sprintf('%f,%f', $location->latitude, $location->longitude)
        )->join('|');

        $response = $this->client->get(self::API_URL, [
            'query' => [
                'origins' => $originsString,
                'destinations' => $destinationsString,
                'key' => config('services.google.maps_api_key'),
            ],
        ]);

        return $response->getBody()->getContents();
    }

    /**
     * @throws \RuntimeException Se la risposta non è nel formato atteso
     *
     * @return array<array<array{
     *     distance: array{text: string, value: int},
     *     duration: array{text: string, value: int},
     *     status: string
     * }>>
     */
    private function parseResponse(string $response): array
    {
        /** @var array{
         *     status: string,
         *     rows: array<array{
         *         elements: array<array{
         *             status: string,
         *             distance: array{text: string, value: int},
         *             duration: array{text: string, value: int}
         *         }>
         *     }>
         * } $data */
        $data = json_decode($response, true);

        if ('OK' !== $data['status']) {
            throw new \RuntimeException('Distance matrix request failed: '.($data['error_message'] ?? 'Unknown error'));
        }

        $result = [];
        foreach ($data['rows'] as $row) {
            $resultRow = [];
            foreach ($row['elements'] as $element) {
                if ('OK' !== $element['status']) {
                    throw new \RuntimeException('Distance matrix element failed: '.($element['status'] ?? 'Unknown error'));
                }

                $resultRow[] = [
                    'distance' => $element['distance'],
                    'duration' => $element['duration'],
                    'status' => $element['status'],
                ];
            }
            $result[] = $resultRow;
        }

        return $result;
    }
}
