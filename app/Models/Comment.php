<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

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

    public function places(): MorphToMany {
        return $this->morphedByMany(Place::class, "commentable");
    }

    public function commentable(): HasOne {
        return $this->hasOne(Commentable::class, "comment_id");
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::deleting(function(Comment $comment) {
            $comment->commentable()->delete();
        });
    }
}
