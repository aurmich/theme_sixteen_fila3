<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace Modules\Geo\Rules;

use Illuminate\Contracts\Validation\Rule;
use Modules\Geo\Actions\FilterCoordinatesInRadiusAction;

/**
 * Regola di validazione per filtrare le coordinate all'interno di un raggio.
 */
class FilterCoordinatesInRadius implements Rule
{
    private string $message = '';

    public function __construct(
        private readonly FilterCoordinatesInRadiusAction $filterAction,
        private readonly float $centerLatitude,
        private readonly float $centerLongitude,
        private readonly int $radius,
    ) {
    }

    /**
     * Determina se le coordinate passate sono all'interno del raggio specificato.
     *
     * @param string $attribute Nome dell'attributo
     * @param mixed  $value     Valore da validare
     */
    public function passes($attribute, $value): bool
    {
        if (! is_array($value)) {
            $this->message = 'Il valore deve essere un array di coordinate';

            return false;
        }

        /** @var array<array{latitude: string, longitude: string}> $coordinates */
        $coordinates = array_map(
            function ($coordinate): array {
                if (! is_array($coordinate)) {
                    return ['latitude' => '', 'longitude' => ''];
                }

                $latitude = $coordinate['latitude'] ?? null;
                $longitude = $coordinate['longitude'] ?? null;

                return [
                    'latitude' => is_scalar($latitude) ? (string) $latitude : '',
                    'longitude' => is_scalar($longitude) ? (string) $longitude : '',
                ];
            },
            $value
        );

        $filteredCoordinates = $this->filterAction->execute(
            $this->centerLatitude,
            $this->centerLongitude,
            $coordinates,
            $this->radius
        );

        return count($filteredCoordinates) > 0;
    }

    /**
     * Ottiene il messaggio di errore per la validazione fallita.
     */
    public function message(): string
    {
        return $this->message ?: 'Nessuna coordinata trovata nel raggio specificato';
=======
namespace Modules\Fixcity\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Modules\Geo\Actions\FilterCoordinatesInRadiusAction as CoordinatesFilter;
use Modules\Fixcity\Models\Ticket;
use Webmozart\Assert\Assert;

class FilterCoordinatesInRadius implements ValidationRule
{
    /**
     * Run the validation rule.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        Assert::isArray($value);
        Assert::keyExists($value, 'lat');
        Assert::keyExists($value, 'lng');
        Assert::numeric($value['lat']);
        Assert::numeric($value['lng']);

        $latitude = (float) $value['lat'];
        $longitude = (float) $value['lng'];


        $coordinatesArray = Ticket::where('latitude', '!=', null)
                    ->where('longitude', '!=', null)
                    ->select('id', 'latitude', 'longitude')->get()->toArray();
        // $ticket_vicini = app(CoordinatesFilter::class)->execute($value['lat'], $value['lng'], $coordinatesArray, 1);
        $ticket_vicini = app(CoordinatesFilter::class)->execute($latitude, $longitude, $coordinatesArray, 1);


        // dddx([$value['lat'], $value['lng'], $coordinatesArray, $ticket_vicini]);
        if (count($ticket_vicini) > 0) {
            $fail('Ci sono già '.(string) count($ticket_vicini).' ticket in questa posizione');
        }
>>>>>>> 50bf5e8f5f (Squashed 'laravel/Modules/Fixcity/' content from commit 11c5f6a3e0)
    }
}
