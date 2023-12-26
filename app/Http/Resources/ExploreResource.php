<?php

namespace App\Http\Resources;

use App\Http\Resources\Place\PlaceResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ExploreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "most_viewed" => PlaceResource::collection($this["most_viewed"]),
            "most_liked" => PlaceResource::collection($this["most_liked"]) ,
            "most_rated" => PlaceResource::collection($this["most_rated"]),
            "most_popular" => PlaceResource::collection($this["most_popular"]),
        ];
    }
}
