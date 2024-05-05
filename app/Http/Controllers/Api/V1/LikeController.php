<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Enums\LikableType;
use App\Http\Resources\Like\LikeResource;
use App\Http\Responses\Like\AddLikeResponse;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function index(Request $request)
    {
        $latitude = $request->header("Location-latitude");
        $longitude = $request->header("Location-longitude");

        $user = Auth::user();

        $likes = $user->likes()->whereHas("place")->with("place", function($query) use ($latitude, $longitude) {
            $query->addDistanceFromField($latitude,$longitude);
        })->latest()->paginate(10);
        return LikeResource::collection($likes);
    }

    public function store($type, string $id) {
        $user = Auth::user();
        $modelType = LikableType::fromName($type)->value;
        $model = $modelType::find($id);
        // delete record if already exist
        if ($model->isLiked()) {
                return $this->delete($type,$id);
        }
        $like = new Like();
        $like->user()->associate($user);
        $model->likes()->save($like);

        return new AddLikeResponse();
    }

    private function delete($type, string $id) {
        $model = LikableType::fromName($type)->value;
        $user = Auth::user();
        $element = $model::find($id);
        $like = $element->likes()->where("user_id", $user->id)->first();
        $like->delete();
        return response(["message" => "like removed"]);
    }
}
