<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'comment'
    ];

    public function places(): BelongsTo {
        return $this->BelongsTo(Place::class, "commentable_id");
    }

    public function commentable(): MorphTo {
        return $this->morphTo();
    }

    public function likes(): MorphMany {
        return $this->morphMany(Like::class, "likable");
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function alreadyLiked(): bool {
        $user = Auth::user();
        return $this->likes()->where("user_id", $user->id)->exists();
    }
}
