<?php

namespace App\Http\Enums;

use App\Models\Place;

enum ReviewableType: string
{
    case PLACE = Place::class;

    public static function fromName(string $name){
        return constant("self::$name");
    }
}

