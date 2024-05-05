<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(Request $request ) {
        $languages = Language::all();

        $response = [];

        foreach ($languages as $language) {
            $translations = [];
            foreach ($language->translations as $translation) {
                $translations[$translation->language->name] = $translation->translation;
            }
            $response[$language->name] = $translations;
        }

        return response()->json($response);
    }
}
