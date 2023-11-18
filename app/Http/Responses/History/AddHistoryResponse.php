<?php

namespace App\Http\Responses\History;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class AddHistoryResponse implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse(
            data: [
                "message" => "History record added"
            ], status: 200
        );
    }
}
