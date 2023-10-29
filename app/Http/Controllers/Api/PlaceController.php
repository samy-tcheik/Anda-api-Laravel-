<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

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

}
