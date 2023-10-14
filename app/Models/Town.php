<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Town extends Model
{
    use HasFactory;

    public function translations(): MorphToMany {
        return $this->morphToMany(Translation::class, "translatable");
    }
}
