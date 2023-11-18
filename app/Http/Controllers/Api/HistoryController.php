<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Place\PlaceResource;
use App\Http\Responses\History\AddHistoryResponse;
use App\Models\History;
use App\Models\Place;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index() {
        $user = Auth::user();
        $places = $user->history()->with("place")->get()->pluck("place");
        return PlaceResource::collection($places);
    }

    public function store(Place $place) {
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
