<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Comment extends Model
{
    use HasFactory;
    use HasUuids;

    public function places(): MorphToMany {
        return $this->morphedByMany(Place::class, "commentable");
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
