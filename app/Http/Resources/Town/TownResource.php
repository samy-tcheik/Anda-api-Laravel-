<?php

namespace App\Http\Resources\Town;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TownResource extends JsonResource
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
            "key" => $this->name
        ];
    }
}
