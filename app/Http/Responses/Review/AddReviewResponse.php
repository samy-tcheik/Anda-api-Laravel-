<?php

namespace App\Http\Responses\Review;

use Illuminate\Http\JsonResponse;

class AddReviewResponse
{

    public function toResponse($request): JsonResponse
    {
        return new JsonResponse(
            data: [
                "message" => "Review added"
            ], status: 200
        );
    }
}
