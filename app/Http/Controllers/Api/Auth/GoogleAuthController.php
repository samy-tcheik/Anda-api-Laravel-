<?php

namespace App\Http\Controllers\Api\Auth;

use App\Enums\AuthPlugin;
use App\Exceptions\GoogleLoginFailedException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\GoogleLoginRequest;
use App\Http\Resources\User\AuthUserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function __invoke(GoogleLoginRequest $request) {
        $validated = $request->validated();
        //Get user from Google Oauth api
        try {
            $googleUser = Socialite::driver('google')->userFromToken($validated["token"]);
        } catch (\Throwable $e) {
            throw new GoogleLoginFailedException();
        }
        $user = User::where("email", $googleUser->email)->first();
        //Generate random password
        $password = Hash::make(Str::random(8));
        if ($user) {
            $user->update(["name" => $googleUser->name, "password" => $password ]);
        } else {
            $user = new User([
                "email" => $googleUser->email,
                "name" => $googleUser->name,
                "password" => $password,
                "auth_driver" => AuthPlugin::Google()
            ]);
        }
        $user->email_verified_at = now();
        $user->clearMediaCollection()->addMedia($googleUser->avatar);
        $user->save();

        return response()->json([
            'bearer' => $user->createToken("API TOKEN")->plainTextToken,
            'user' => AuthUserResource::make($user),
        ], 200);
    }
}
