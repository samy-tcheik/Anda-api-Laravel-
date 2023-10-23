<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AvatarRequest;
use App\Http\Requests\User\PositionRequest;
use App\Http\Requests\User\UserRequest;
use App\Http\Resources\User\UserRessource;
use App\Http\Responses\User\UpdatePositionResponse;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{

    public function updateAvatar(AvatarRequest $request): UserRessource
    {
        $request->validated();
        $user = Auth::user();
        $avatar = $request->file("avatar");
        $path = $avatar->store("avatars", "public");
        $user->update(["avatar" => $path]);

        return UserRessource::make($user);
    }

    public function show(): UserRessource
    {
        $user = Auth::user();
        if ($user->avatar) {
            $user->avatar_url = asset('storage/' . $user->avatar);
        } else {
            $user->avatar_url = null;
        }
        return UserRessource::make($user);
    }

    public function update(UserRequest $request): UserRessource
    {
        $user = Auth::user();
        $validated = $request->validated();
        $user->update($validated);
        return UserRessource::make($user);
    }

    public function updatePosition(PositionRequest $request)
    {
        $user = Auth::user();
        $validated = $request->validated();
        $user->update($validated);
        return new UpdatePositionResponse();
    }
}
