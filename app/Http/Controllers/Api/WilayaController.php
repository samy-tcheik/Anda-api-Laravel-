<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use App\Models\Wilaya;


class WilayaController extends Controller
{
    public function index() {
        $wilaya = Wilaya::all();

        return response()->json($wilaya);
    }

}
