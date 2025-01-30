<?php

declare(strict_types=1);

namespace Modules\Geo\Exceptions;

/**
 * Eccezione lanciata quando i dati di una posizione non sono validi.
 */
class InvalidLocationException extends \RuntimeException
{
    /**
     * Crea una nuova istanza per dati non validi.
     */
    public static function invalidData(string $message = 'Dati della posizione non validi'): self
    {
        return new self($message);
    }

    /**
     * Crea una nuova istanza per coordinate non valide.
     */
    public static function invalidCoordinates(float $latitude, float $longitude): self
    {
        return new self(sprintf(
            'Coordinate non valide: latitudine %f, longitudine %f',
            $latitude,
            $longitude
        ));
    }

    public static function invalidAddress(): self
    {
        return new self('Invalid address provided');
    }

    public static function invalidType(string $expectedType): self
    {
        return new self(sprintf('Invalid location type, expected %s', $expectedType));
    }
}
