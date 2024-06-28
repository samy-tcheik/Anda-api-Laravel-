<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Mail\VerficationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class VerificationController extends Controller
{
    static function emailVerification(User $user) {
        //  Generate the token
        $verificationToken = Str::random(40);
        // Save the token in the user's record
        $user->verification_token = $verificationToken;
        $user->save();

        $verificationLink = route("verify-email", ["token" => $verificationToken, "lang" => Lang::locale()]);

        // Send the verification link with the token via email
        Mail::to($user->email)->send(new VerficationMail($user, $verificationLink));
    }

    public function verify(Request $request) {
        $token = $request->input('token');
        $lang = $request->input('lang');

        App::setLocale($lang);
        // Find the user with the verification token
        $user = User::where('verification_token', $token)->first();

        if (is_null($user) ) {
            return view("auth.verification_token_expired");
        }
        if ($user->verification_token === $token) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();

            return view("auth.verification_success");
        } else {
            return view("auth.verification_token_expired");
        }
    }
}
