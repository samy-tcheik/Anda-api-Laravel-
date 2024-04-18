<?php

namespace App\Http\Responses\Auth;

use App\Enums\ExceptionCode;
use App\Enums\HttpStatusCode;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class EmailNotVerifiedResponse implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse(
            data: [
                "message" => ExceptionCode::EMAIL_NOT_VERIFIED_EXCEPTION,
            ], status: HttpStatusCode::UNAUTHORIZED
        );
    }
}
