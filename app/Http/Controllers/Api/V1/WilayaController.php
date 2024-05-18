<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Wilaya\WilayaResource;
use App\Models\Wilaya;


class WilayaController extends Controller
{
    public function index() {
        $wilaya = Wilaya::orderBy("name", "asc")->get();
        return WilayaResource::collection($wilaya);
    }
}
