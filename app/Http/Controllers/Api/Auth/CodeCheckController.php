<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\CodeCheckRequest;
use App\Http\Responses\Auth\CodeExpiredResponse;
use App\Models\PasswordResetToken;

class CodeCheckController extends Controller
{
    public function __invoke(CodeCheckRequest $request)
    {
        $request->validated();

        // find the code
        $passwordReset = PasswordResetToken::firstWhere('code', $request->code);

        // check if it does not expired: the time is one hour
        if ($passwordReset->created_at > now()->addHour()) {
            $passwordReset->delete();
            return new CodeExpiredResponse();
        }

        return response([
            'code' => $passwordReset->code,
            'message' => "code is valid"
        ], 200);
    }
}
