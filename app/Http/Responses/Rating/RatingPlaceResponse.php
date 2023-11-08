<?php


namespace App\Http\Responses\Rating;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;


class RatingPlaceResponse implements Responsable
{

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: [
                "message" => "Rating added"
            ], status: 200
        );
    }
}
