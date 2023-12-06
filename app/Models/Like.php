<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Like extends Model
{
    use HasFactory;
    use HasUuids;

    public function place(): MorphToMany {
        return $this->morphedByMany(Place::class, "likable");
    }

    public function likable(): HasOne {
        return $this->hasOne(Likable::class, "like_id");
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::deleting(function(Like $like) {
            $like->likable()->delete();
        });
    }
}
