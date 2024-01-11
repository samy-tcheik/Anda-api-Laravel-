<?php

namespace App\Http\Resources\Place;

use App\Http\Resources\Town\TownResource;
use App\Http\Resources\Wilaya\WilayaResource;
use App\Models\Language;
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
        $langaugeId = Language::where("code", $request->header("Accept-Language"))->first()->id;
        return [
            "id" => $this->id,
            "name" => $this->getTranslation($langaugeId),
            "description" => $this->description->getTranslation($langaugeId),
            "distance" => strval(round($this->distance)),
            "town" => TownResource::make($this->town),
            "wilaya" => WilayaResource::make($this->town->wilaya),
            "rating" => $this->getRating(),
            "rating_count" => $this->ratings->count(),
            "comment_count" => $this->comments->count(),
            "liked" => $this->alreadyLiked(),
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
            "media" => $this->getMedia()->toArray()
        ];
    }
}
