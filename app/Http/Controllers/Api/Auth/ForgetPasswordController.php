<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use App\Http\Responses\Auth\ForgetPasswordResponse;
use App\Mail\SendCodeResetPassword;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordController extends Controller
{
    public function __invoke(ForgotPasswordRequest $request)
    {
        $data = $request->validated();

        // Delete all old code that user send before.
        PasswordResetToken::where('email', $request->email)->delete();
        $user = User::where("email", $request->email)->first();
        // Generate random code
        $data['code'] = mt_rand(1000, 9999);
        // Create a new code
        $codeData = PasswordResetToken::create($data);
        // Send email to user
        Mail::to($request->email)->send(new SendCodeResetPassword($user,$codeData->code));

        return new ForgetPasswordResponse();
    }
}
