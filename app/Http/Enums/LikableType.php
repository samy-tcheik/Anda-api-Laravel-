<?php

namespace App\Http\Enums;

use App\Models\Place;

enum LikableType: string
{
    case PLACE = Place::class;

    public static function fromName(string $name) {
        return constant("self::$name");
    }
}
