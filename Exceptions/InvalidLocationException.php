<?php

declare(strict_types=1);

namespace Modules\Geo\Exceptions;

class InvalidLocationException extends \InvalidArgumentException
{
    public static function invalidCoordinates(): self
    {
        return new self('Invalid coordinates provided');
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
