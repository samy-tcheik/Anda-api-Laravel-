<?php

namespace App\Http\Enums;

use App\Models\Comment;
use App\Models\Place;

enum CommentableType: string
{
    case PLACE = Place::class;
    case COMMENT = Comment::class;

    public static function fromName(string $name){
        return constant("self::$name");
    }
}
