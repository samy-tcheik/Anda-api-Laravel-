<?php

namespace App\Models;

use App\Scopes\OrderByScope;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Wilaya extends Model
{
    use HasFactory;
    use HasUuids;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new OrderByScope);
    }

    public function translations(): MorphToMany {
        return $this->morphToMany(Translation::class, "translatable");
    }

    public function getTranslation(string $lang): string {
        return $this->translations->where("language_id",$lang)->first()->translation;
    }

    public function towns() {
        return $this->hasMany(Town::class)->orderBy("name", "asc");
    }
}
