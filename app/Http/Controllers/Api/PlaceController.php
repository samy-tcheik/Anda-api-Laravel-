<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
            ->allowedFilters(["category_id", "town_id", AllowedFilter::custom("range", new RangeFilter)->ignore(null)])
            ->with( 'town.wilaya' )
            ->take($request->get("count"))
            ->paginate(10)->appends(\request()->query());
        return PlaceResource::collection($places);
    }

    public function nearby(Request $request): ResourceCollection {
        $latitude = $request->get("filter")["range"]["latitude"];
        $longitude = $request->get("filter")["range"]["longitude"];
        $places = QueryBuilder::for(Place::class)
            ->allowedFilters(["category_id"])
            ->withinDistanceOf($latitude,$longitude, 30)->addDistanceFromField($latitude,$longitude)
            ->with( 'town.wilaya' )
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

        $latitude = $request->get("filter")["range"]["latitude"];
        $longitude = $request->get("filter")["range"]["longitude"];
        $place = Place::addDistanceFromField($latitude,$longitude)->find($place_id);
        return PlaceDetailResource::make($place);
    }

}
