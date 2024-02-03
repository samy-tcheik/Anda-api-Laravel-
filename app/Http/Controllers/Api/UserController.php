<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AvatarRequest;
use App\Http\Requests\User\PositionRequest;
use App\Http\Requests\User\UserRequest;
use App\Http\Resources\User\UserResource;
use App\Http\Responses\User\DeleteUserResponse;
use App\Http\Responses\User\UpdatePositionResponse;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Update User Avatar
     *
     * This method is responsible for updating a user's avatar image.
     *
     * @param AvatarRequest $request
     * @return UserResource
     */
    public function updateAvatar(AvatarRequest $request): UserResource
    {
        $request->validated();
        $user = Auth::user();
        if ($request->file("avatar")->isValid()) {
            //Replace old avatar with new one
            //remove old media
            $user->clearMediaCollection();
            //add new avatar
            $user->addMediaFromRequest("avatar")->toMediaCollection();
        }
    /*    $avatar = $request->file("avatar");
        $path = $avatar->store("avatars", "public");
        $user->update(["avatar" => $path]);
*/
        return UserResource::make($user);
    }

    /**
     * Show User Data
     *
     * Retrieve and show the user's data, including their avatar URL if available.
     *
     * @return UserResource
     */
    public function show(): UserResource
    {
        $user = Auth::user();
        return UserResource::make($user);
    }

    /**
     * Update User Data
     *
     * Update the user's data based on the validated request.
     *
     * @param UserRequest $request
     * @return UserResource
     */

    public function update(UserRequest $request): UserResource
    {
        $user = Auth::user();
        $validated = $request->validated();
        $user->update($validated);
        return UserResource::make($user);
    }

    /**
     * Update User Position
     *
     * Update the user's position data.
     *
     * @param PositionRequest $request
     * @return UpdatePositionResponse
     */

    public function updatePosition(PositionRequest $request): UpdatePositionResponse
    {
        $user = Auth::user();
        $validated = $request->validated();
        $user->update($validated);
        return new UpdatePositionResponse();
    }

    /**
     * Delete User Account
     *
     * Delete the authenticated user's account.
     *
     * @return DeleteUserResponse
     */

    public function delete(): DeleteUserResponse
    {
        $user = Auth::user();
        $user->delete();
        return new DeleteUserResponse();
    }
}
