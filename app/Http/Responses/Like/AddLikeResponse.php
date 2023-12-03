<?php

namespace App\Http\Responses\Like;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class AddLikeResponse implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse(
            data: [
                "message" => "Like added"
            ], status: 200
        );
    }
}
