<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'created_at',
        'updated_at',
    ];


    public function place(): BelongsTo {
        return $this->belongsTo(Place::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
