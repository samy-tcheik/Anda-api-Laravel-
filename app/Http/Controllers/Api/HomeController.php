<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Home\HomeResource;
use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
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
        $categories = Category::with("places")->get();

        foreach ($categories as $category) {
            $places = Place::where("category_id", $category->id)->withinDistanceOf($latitude,$longitude, 30)->addDistanceFromField($latitude,$longitude)
                ->with("histories","likes", "ratings","comments")
                ->withCount("histories","likes","ratings", "comments")
                ->orderBy(DB::raw("histories_count + likes_count + ratings_count + comments_count"), "desc")
                ->take(5)->get();
            $category->place = $places;
        }

        return HomeResource::make(
            [
                "explore" => [
                    "most_viewed" => $mostViewed,
                    "most_liked" => $mostLiked ,
                    "most_rated" => $mostRated,
                    "most_popular" => $mostPopular
                ],
                "nearby" => $categories,
            ]
        );
    }
}
