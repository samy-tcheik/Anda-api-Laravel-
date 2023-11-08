<?php

namespace App\Http\Resources\Place;

use App\Http\Resources\Wilaya\WilayaResource;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlaceDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $langaugeId = Language::where("code", $request->header("Accept-Language"))->first()->id;
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description->getTranslation($langaugeId),
            "wilaya" => WilayaResource::make($this->town->wilaya),
            "distance" => strval(round($this->distance)),
            "rating" => $this->getRating()
        ];
    }
}
