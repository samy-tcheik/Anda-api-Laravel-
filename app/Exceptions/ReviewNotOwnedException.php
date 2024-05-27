<?php

namespace App\Exceptions;

use App\Enums\ExceptionCode;
use App\Enums\HttpStatusCode;
use Exception;

class ReviewNotOwnedException extends Exception
{
    public function __construct(string $message = "", int $code = 0)
    {
        parent::__construct(ExceptionCode::REVIEW_CANT_BE_DELETED, HttpStatusCode::FORBIDDEN);
    }
}
