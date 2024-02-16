<?php

namespace App\Http\Responses\Auth;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class PasswordResetSuccessResponse implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse(
            data: [
                "message" => "password has been successfully reset"
            ], status: 200
        );
    }
}
