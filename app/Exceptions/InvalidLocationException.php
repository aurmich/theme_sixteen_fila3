<?php

namespace Modules\Geo\Exceptions;

use Exception;
use Throwable;

class InvalidLocationException extends Exception
{
    public function __construct(string $message = "Invalid location data provided", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
