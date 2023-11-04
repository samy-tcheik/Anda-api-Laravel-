<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Wilaya\WilayaResource;
use App\Models\Wilaya;


class WilayaController extends Controller
{
    public function index() {
        $wilaya = Wilaya::all();
        return WilayaResource::collection($wilaya);
    }

}
