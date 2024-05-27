<?php

namespace App\Http\Responses\Review;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class DeleteReviewResponse implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse(
            data: [
                "message" => "Review deleted"
            ], status: 200
        );
    }
}
