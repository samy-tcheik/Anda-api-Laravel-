<?php

namespace App\Http\Enums;

use App\Models\Place;
use App\Models\Review;

enum LikableType: string
{
    case PLACE = Place::class;
    case REVIEW = Review::class;

    public static function fromName(string $name) {
        return constant("self::$name");
    }
}
