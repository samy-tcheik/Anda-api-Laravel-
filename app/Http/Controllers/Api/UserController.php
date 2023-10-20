<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\PositionRequest;
use App\Http\Resources\User\UpdatePositionRessource;
use App\Http\Responses\User\UpdatePositionResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updatePosition(PositionRequest $request)
    {
        $user = Auth::user();
        $validated = $request->validated();
        $user->update($validated);
        return new UpdatePositionResponse();
    }
}
