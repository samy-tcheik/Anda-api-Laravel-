<?php

namespace App\Http\Responses\User;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;


class UpdatePositionResponse implements Responsable
{
    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: [
                "message" => "position updated"
            ],status: 200
        );
    }
}
