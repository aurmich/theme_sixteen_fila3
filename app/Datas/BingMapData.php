<?php

declare(strict_types=1);

namespace Modules\Geo\Datas;

/**
 * Data Transfer Object per i dati delle mappe Bing.
 */
class BingMapData
{
    /**
     * @param array<string, mixed> $data Dati grezzi dalla risposta di Bing Maps
     */
    public function __construct(
        private readonly array $data,
    ) {
    }

    /**
     * Converte l'oggetto in un array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }
}
