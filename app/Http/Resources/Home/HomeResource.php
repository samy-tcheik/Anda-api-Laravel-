<?php

namespace App\Http\Resources\Home;

use App\Http\Resources\Place\PlaceResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "explore" => [
                "most_viewed" => PlaceResource::collection($this["explore"]["most_viewed"]),
                "most_liked" => PlaceResource::collection($this["explore"]["most_liked"]) ,
                "most_rated" => PlaceResource::collection($this["explore"]["most_rated"]),
                "most_popular" => PlaceResource::collection($this["explore"]["most_popular"]),
            ],
            "nearby" => HomeCategoryResource::collection($this["nearby"])
        ];
    }
}
