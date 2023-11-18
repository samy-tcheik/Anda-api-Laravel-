<?php

namespace App\Http\Responses\Comment;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class DeleteCommentResponse implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse(
            data: [
                "message" => "Comment deleted"
            ], status: 200
        );
    }
}
