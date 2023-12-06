<?php

namespace App\Http\Resources\Like;

use App\Http\Resources\Place\PlaceResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LikeResource extends JsonResource
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
        "create_at" => $this->create_at,
        "place" => PlaceResource::make($this->place[0]),
    ];
    }
}
