<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Filters\RangeFilter;
use App\Http\Requests\Place\RatingRequest;
use App\Http\Resources\ExploreResource;
use App\Http\Resources\Place\PlaceResource;
use App\Http\Resources\Rating\RatingResource;
use App\Http\Responses\Rating\RatingPlaceResponse;
use App\Models\Place;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class PlaceController extends Controller
{
    public function index(Request $request): ResourceCollection {
        $places = QueryBuilder::for(Place::class)
            ->allowedFilters(["category_id", "town_id", AllowedFilter::custom("range", new RangeFilter)->ignore(null)])
            ->with( 'town.wilaya' )
            ->take($request->get("count"))
            ->paginate(10)->appends(\request()->query());
        return PlaceResource::collection($places);
    }

    public function explore(Request $request) {
        $latitude = $request->header("Location-latitude");
        $longitude = $request->header("Location-longitude");

        $mostViewed = Place::addDistanceFromField($latitude,$longitude)
            ->withCount("histories")
            ->orderBy('histories_count', 'desc')
            ->take(5)->get();

        $mostLiked = Place::addDistanceFromField($latitude,$longitude)
            ->withCount("likes")
            ->orderBy('likes_count', 'desc')
            ->take(5)->get();

        $mostRated = Place::addDistanceFromField($latitude,$longitude)
            ->withAvg("ratings", "rating")
            ->orderBy('ratings_avg_rating', 'desc')
            ->take(5)->get();

        $mostPopular = Place::addDistanceFromField($latitude,$longitude)
            ->with("histories","likes", "ratings","comments")
            ->withCount("histories","likes","ratings", "comments")
            ->orderBy(DB::raw("histories_count + likes_count + ratings_count + comments_count"), "desc")
            ->take(5)->get();

        return ExploreResource::make(
            [
            "most_viewed" => $mostViewed,
            "most_liked" => $mostLiked ,
            "most_rated" => $mostRated,
            "most_popular" => $mostPopular
            ]
        );
    }

    public function nearby(Request $request): ResourceCollection {
        $latitude = $request->header("Location-latitude");
        $longitude = $request->header("Location-longitude");
        $places = QueryBuilder::for(Place::class)
            ->allowedFilters(["category_id"])
            ->withinDistanceOf($latitude,$longitude, 30)->addDistanceFromField($latitude,$longitude)
            ->take(5)->get();
            ;
        return PlaceResource::collection($places);
    }

    public function discover(Request $request): ResourceCollection {
        $places = QueryBuilder::for(Place::class)
            ->with( 'town.wilaya' )
            ->take(5)
            ->paginate();
        return PlaceResource::collection($places);
    }

    public function show(Request $request,string $place_id) {

        $latitude = $request->header("Location-latitude");
        $longitude = $request->header("Location-longitude");
        $place = Place::addDistanceFromField($latitude,$longitude)->with("comments")->find($place_id);
        HistoryController::store($place);
        return PlaceResource::make($place);
    }

    public function getRating(Place $place): RatingResource {
        $user = Auth::user();
        $rating = new Rating();
        if ($place->ratings()->exists()) {
            $rating = $place->ratings()->where("user_id", $user->id)->first();
        }
        $rating->rating = "0";
        return RatingResource::make($rating);
    }

    public function updateRating(RatingRequest $request, Place $place) {
        $user = Auth::user();
        if (!$user->ratings()->where("place_id",$place->id)->exists()) {
            $rating = new Rating($request->validated());
            $rating->place()->associate($place);
            $rating->user()->associate(Auth::user());
            $rating->save();
        } else {
            $user->ratings()->where("place_id", $place->id)->update($request->validated());
        }
        return new RatingPlaceResponse();
    }

}
