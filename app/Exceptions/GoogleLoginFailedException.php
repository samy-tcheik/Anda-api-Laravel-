<?php

namespace App\Exceptions;

use App\Enums\ExceptionCode;
use App\Enums\HttpStatusCode;
use Exception;

class GoogleLoginFailedException extends Exception
{
    public function render() {
        return response()->json(["message" => ExceptionCode::GOOGLE_LOGIN_FAILED_EXCEPTION, "code" => HttpStatusCode::UNAUTHORIZED], HttpStatusCode::UNAUTHORIZED);
    }
}
