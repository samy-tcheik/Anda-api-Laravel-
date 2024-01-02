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
                "most_popular" => PlaceResource::collection($this["explore"]["most_popular"]),
                "most_rated" => PlaceResource::collection($this["explore"]["most_rated"]),
                "most_liked" => PlaceResource::collection($this["explore"]["most_liked"]) ,
                "most_viewed" => PlaceResource::collection($this["explore"]["most_viewed"]),
            ],
            "nearby" => HomeCategoryResource::collection($this["nearby"])
        ];
    }
}
