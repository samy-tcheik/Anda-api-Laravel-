<?php

namespace App\Http\Resources\Place;

use App\Http\Resources\Town\TownResource;
use App\Http\Resources\Wilaya\WilayaResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlaceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "distance" => strval(round($this->distance)),
            "town" => TownResource::make($this->town),
            "wilaya" => WilayaResource::make($this->town->wilaya)
        ];
    }
}
