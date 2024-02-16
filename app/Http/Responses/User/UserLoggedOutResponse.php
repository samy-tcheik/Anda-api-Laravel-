<?php

namespace App\Http\Responses\User;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class UserLoggedOutResponse implements Responsable
{
    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: [
                "message" => "User logged out successfully."
            ], status: 200
        );
    }
}

