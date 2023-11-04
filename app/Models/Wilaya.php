<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Wilaya extends Model
{
    use HasFactory;
    use HasUuids;

    public function translations(): MorphToMany {
        return $this->morphToMany(Translation::class, "translatable");
    }

    public function towns() {
        return $this->hasMany(Town::class);
    }
}
