<?php

namespace App\Exceptions;

use App\Enums\ExceptionCode;
use App\Enums\HttpStatusCode;
use Exception;


class AlreadyReviewedException extends Exception
{
    public function __construct(string $message = "", int $code = 0)
    {
        parent::__construct(ExceptionCode::ALREADY_REVIEWED_EXCEPTION, HttpStatusCode::FORBIDDEN);
    }

}
