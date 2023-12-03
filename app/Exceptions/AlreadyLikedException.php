<?php

namespace App\Exceptions;

use App\Enums\ExceptionCode;
use App\Enums\HttpStatusCode;
use Exception;

class AlreadyLikedException extends Exception
{
    public function __construct(string $message = "", int $code = 0)
    {
        parent::__construct(ExceptionCode::ALREADY_LIKED_EXCEPTION, HttpStatusCode::FORBIDDEN);
    }
}
