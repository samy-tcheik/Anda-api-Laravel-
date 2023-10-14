<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Translation extends Model
{
    use HasFactory;

   public function categories(): MorphToMany {
        return $this->morphedByMany(Category::class, "translatable");
    }

    public function languages(): MorphToMany {
        return $this->morphedByMany(Language::class, "translatable");
    }

    public function places(): MorphToMany {
        return $this->morphedByMany(Place::class, "translatable");
    }

    public function towns(): MorphToMany {
        return $this->morphedByMany(Town::class, "translatable");
    }

    public function wilayas(): MorphToMany {
        return $this->morphedByMany(Wilaya::class, "translatable");
    }

    public function language() {
       return $this->belongsTo(Language::class, "language_id");
    }

}
