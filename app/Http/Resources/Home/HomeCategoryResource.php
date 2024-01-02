<?php

namespace App\Http\Resources\Home;

use App\Http\Resources\Place\PlaceResource;
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
        return [
            "id" => $this->id,
            "name" =>$this->name,
            "places" => PlaceResource::collection($this->place)
        ];
    }
}
