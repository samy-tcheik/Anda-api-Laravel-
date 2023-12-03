<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;
use Netsells\GeoScope\Traits\GeoScopeTrait;

class Place extends Model
{
    use HasFactory;
    use HasUuids;
    use GeoScopeTrait;

    public function translations(): MorphToMany {
        return $this->morphToMany(Translation::class, "translatable");
    }

    public function town(): BelongsTo {
        return $this->belongsTo(Town::class);
    }

    public function description(): HasOne {
        return $this->hasOne(Description::class,"place_id");
    }

    public function rating(): HasMany {
        return $this->hasMany(Rating::class, "place_id");
    }

    public function getRating(): ?float {
        return $this->rating->avg("rating");
    }

    public function comments(): MorphToMany {
        return $this->morphToMany(Comment::class, "commentable");
    }

    public function likes(): MorphToMany {
        return $this->morphToMany(Like::class, "likable");
    }

    public function getTranslation(string $lang): string {
        return $this->translations->where("language_id",$lang)->first()->translation;
    }

    public function alreadyLiked(): bool {
        $user = Auth::user();
        return $this->likes()->where("user_id", $user->id)->exists();
    }
}
