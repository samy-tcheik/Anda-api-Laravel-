<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ResetPasswordRequest;
use App\Http\Responses\Auth\CodeExpiredResponse;
use App\Http\Responses\Auth\PasswordResetSuccessResponse;
use App\Models\PasswordResetToken;
use App\Models\User;

class ResetPasswordController extends Controller
{
    public function __invoke(ResetPasswordRequest $request)
    {
        $request->validated();

        // find the code
        $passwordReset = PasswordResetToken::firstWhere('code', $request->code);

        // check if it does not expired: the time is one hour
        if ($passwordReset->created_at > now()->addHour()) {
            $passwordReset->delete();
            return new CodeExpiredResponse();
        }

        // find user's email
        $user = User::firstWhere('email', $passwordReset->email);
        // update user password
        $user->update($request->only('password'));
        // delete current code
        $passwordReset->delete();

        return new PasswordResetSuccessResponse();
    }
}
