<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HTMLController extends Controller
{
    public function contactUs(Request $request) {
        $language = $request->header("Accept-Language");
        $content = Storage::get("html/contact_us_{$language}.html");
        return response()->json(['content' => $content]);
    }

    public function privacy(Request $request) {
        $language = $request->header("Accept-Language");
        $content = Storage::get("html/privacy_policy_{$language}.html");
        return response()->json(['content' => $content]);
    }
}
