<?php


namespace App\Http\Responses\User;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;


class DeleteUserResponse implements Responsable
{

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: [
                "message" => "User deleted"
            ], status: 200
        );
    }
}
