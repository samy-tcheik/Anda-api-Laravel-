<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\VerificationController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\AuthUserResource;
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

        $user = new User($validated);

        VerificationController::emailVerification($user);

        return response([
            "user" => $user,
        ], 200);
    }

    /**
     * Login The User
     * @param Request $request
     * @return Response
     */
    public function login(LoginRequest $request)
    {
        try {
            $validateUser = $request->validated();
            if(!Auth::attempt($validateUser)){
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 401);
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
        return [
            'message' => 'user logged out'
        ];
    }
}
