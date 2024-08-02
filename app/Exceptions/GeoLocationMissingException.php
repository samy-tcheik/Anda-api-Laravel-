<?php

namespace App\Exceptions;

use App\Enums\ExceptionCode;
use App\Enums\HttpStatusCode;
use Exception;

class GeoLocationMissingException extends Exception
{
    public function render() {
        return response()->json(["message" => ExceptionCode::GEOLOCATION_MISSING, "code" => HttpStatusCode::BAD_REQUEST], HttpStatusCode::BAD_REQUEST);
    }
}
