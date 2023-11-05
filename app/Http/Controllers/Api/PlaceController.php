<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Filters\RangeFilter;
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
            ->get();
        return PlaceResource::collection($places);
    }
}
