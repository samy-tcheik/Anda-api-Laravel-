<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Description extends Model
{
    use HasFactory;
    use HasUuids;

    public function translations(): MorphToMany {
        return $this->morphToMany(Translation::class,"translatable");
    }

    /**
     * Get description translation.
     */

    public function getTranslation(string $lang): string {
        return $this->translations->where("language_id",$lang)->first()->translation;
    }
}
