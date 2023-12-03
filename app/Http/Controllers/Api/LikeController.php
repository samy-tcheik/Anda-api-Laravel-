<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\AlreadyLikedException;
use App\Http\Controllers\Controller;
use App\Http\Enums\LikableType;
use App\Http\Responses\Like\AddLikeResponse;
use App\Models\Like;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function index() {

    }

    public function store($type, string $id) {
        $model = LikableType::fromName($type)->value;
        if ($model::find($id)->alreadyLiked()) {
                throw new AlreadyLikedException();
        }
        $like = new Like();
        $like->user()->associate(Auth::user());
        $model::find($id)->first()->likes()->save($like);

        return new AddLikeResponse();
    }

    public function delete($type, string $id) {
        $model = LikableType::fromName($type)->value;
        $user = Auth::user();
        $element = $model::find($id);
        $element->likes()->where("user_id", $user->id)->first()->delete();

        return JsonResource::make(["id" => $element->id]);
    }
}
