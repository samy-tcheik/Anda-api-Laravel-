<?php

namespace App\Http\Controllers\Api\Auth;

use App\Enums\AuthPlugin;
use App\Http\Controllers\Api\VerificationController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\AuthUserResource;
use App\Http\Responses\Auth\AuthFailedResponse;
use App\Http\Responses\User\UserLoggedOutResponse;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Create User
     * @param Request $request
     * @return Response
     */
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        $validated["auth_driver"] = AuthPlugin::App;
        $user = new User($validated);

        VerificationController::emailVerification($user);

        return response([
            "user" => $user,
        ], 200);
    }

    /**
     * Login The User
     * @param Request $request
     */
    public function login(LoginRequest $request)
    {
        try {
            $validateUser = $request->validated();
            if(!Auth::attempt($validateUser)){
                return new AuthFailedResponse();
            }

            $user = User::where('email', $request->email)->first();
            return response()->json([
                'bearer' => $user->createToken("API TOKEN")->plainTextToken,
                'user' => AuthUserResource::make($user)
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function logout() {
        auth()->user()->tokens()->delete();
        return new UserLoggedOutResponse();
    }
}
