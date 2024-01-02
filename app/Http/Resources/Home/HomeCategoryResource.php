<?php

namespace App\Http\Resources\Home;

use App\Http\Resources\Place\PlaceResource;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeCategoryResource extends JsonResource
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
            "key" => $this->name,
            "name" => $this->translations->where("language_id",$langaugeId)->first()->translation,
            "places" => PlaceResource::collection($this->place)
        ];
    }
}
