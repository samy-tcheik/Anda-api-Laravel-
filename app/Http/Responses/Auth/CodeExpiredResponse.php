<?php

namespace App\Http\Responses\Auth;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class CodeExpiredResponse implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse(
            data: [
                "message" => "Code expired"
            ], status: 422
        );
    }
}
