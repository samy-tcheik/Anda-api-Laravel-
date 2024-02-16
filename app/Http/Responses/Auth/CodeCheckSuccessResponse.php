<?php

namespace App\Http\Responses\Auth;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class CodeCheckSuccessResponse implements Responsable
{
    public function toResponse($request)
    {
        return new JsonResponse(
            data: [
                "message" => "Email & Password does not match with our record."
            ], status: 401
        );
    }
}
