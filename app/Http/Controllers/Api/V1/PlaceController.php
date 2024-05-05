<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\PlaceNameFilter;
use App\Http\Filters\RangeFilter;
use App\Http\Resources\Place\PlaceDetailResource;
use App\Http\Resources\Place\PlaceResource;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class PlaceController extends Controller
{
    public function index(Request $request): ResourceCollection {
        $places = QueryBuilder::for(Place::class)
            ->allowedFilters(["category_id",
                "town_id",
                AllowedFilter::exact("wilaya_id", "town.wilaya.id"),
                AllowedFilter::custom("name", new PlaceNameFilter),
                AllowedFilter::custom("range", new RangeFilter)->ignore(null)])
            ->with( 'town.wilaya' )
            ->take($request->get("count"))
            ->paginate(10)->appends(\request()->query());
        return PlaceResource::collection($places);
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
        $place = Place::addDistanceFromField($latitude,$longitude)->with("reviews")->find($place_id);

        HistoryController::store($place);
        return PlaceDetailResource::make($place);
    }
}
