<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\VerficationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $verificationLink = route("verify-email", ["token" => $verificationToken]);

        // Send the verification link with the token via email
        Mail::to($user->email)->send(new VerficationMail($user, $verificationLink));
    }

    public function verify(Request $request) {
        $token = $request->input('token');

        // Find the user with the verification token
        $user = User::where('verification_token', $token)->first();

        if (!$user) {
            response([
                "message" => "user not found",
                401
            ]);
        }

        if ($user->verification_token === $token) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();

            return response()->json(['message' => 'Email verified successfully']);
        } else {
            return response()->json(['message' => 'Invalid verification token'], 400);
        }
    }
}
