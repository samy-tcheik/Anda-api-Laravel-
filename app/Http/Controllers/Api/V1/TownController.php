<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Town\TownResource;
use App\Models\Wilaya;

class TownController extends Controller
{
    public function wilaya_town(Wilaya $wilaya) {
        return TownResource::collection($wilaya->towns);
    }
}
