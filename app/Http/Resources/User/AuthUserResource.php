<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthUserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //Get User model media
        $media = $this->getMedia()->toArray();
        $avatar = !empty($media) ? $media[0] : null;

        return [
            "name" => $this->name,
            "email" => $this->email,
            "avatar" => $avatar,
            "auth_driver" => $this->auth_driver
        ];
    }
}
