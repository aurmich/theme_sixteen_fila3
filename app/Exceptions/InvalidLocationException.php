<?php

declare(strict_types=1);

namespace Modules\Geo\Exceptions;

class InvalidLocationException extends \Exception
{
    public function __construct(string $message = 'Invalid location data provided', int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
