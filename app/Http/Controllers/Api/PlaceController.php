<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Place\PlaceResource;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Spatie\QueryBuilder\QueryBuilder;

class PlaceController extends Controller
{
    public function index() {
        $places = Place::all();
        foreach ($places as $place) {
            $descriptionTranslations = [];
            foreach ($place->description->translations as $translation) {
                $descriptionTranslations[$translation->language->name] = $translation->translation;
            }
            $place["description"] = $descriptionTranslations;
        }
        return response()->json($places);
    }

    public function nearby(Request $request): ResourceCollection {
        $test = QueryBuilder::for(Place::class)
            ->allowedFilters(["category_id"])
            ->withinDistanceOf($request->get("latitude"),$request->get("longitude"), 20)
            ->take(5)->get();
        return PlaceResource::collection($test);
    }
}
