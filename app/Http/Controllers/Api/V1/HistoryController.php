<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\History\HistoryResource;
use App\Http\Responses\History\AddHistoryResponse;
use App\Models\History;
use App\Models\Place;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index(Request $request): ResourceCollection
    {
        $latitude = $request->header("Location-latitude");
        $longitude = $request->header("Location-longitude");

        $user = Auth::user();

        $histories = $user->history()->with("place", function($query) use ($latitude, $longitude) {
            $query->addDistanceFromField($latitude,$longitude);
        })->latest()->paginate(10);

        return HistoryResource::collection($histories);
    }

    static function store(Place $place) {
        $user = Auth::user();
        // Check if user already visited
        $history = History::where("user_id", $user->id)->where("place_id", $place->id)->first();
        if ($history) {
            // update only created_at & updated_at
            $history->update(["created_at" => Carbon::now(), "updated_at" => Carbon::now()]);
        } else {
            // create new one
            $history = new History();
            $history->user()->associate($user);
            $history->place()->associate($place);
        }
        $history->save();
        return new AddHistoryResponse();
    }
}
