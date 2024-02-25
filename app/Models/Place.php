<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\Auth;
use Netsells\GeoScope\Traits\GeoScopeTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Place extends Model implements  HasMedia
{
    use HasUuids;
    use GeoScopeTrait;
    use InteractsWithMedia;

    public function translations(): MorphToMany {
        return $this->morphToMany(Translation::class, "translatable");
    }

    public function town(): BelongsTo {
        return $this->belongsTo(Town::class);
    }

    public function description(): HasOne {
        return $this->hasOne(Description::class,"place_id");
    }

    public function histories(): HasMany {
        return $this->hasMany(History::class, "place_id");
    }

    public function getRating(): ?float {
        return round($this->reviews->avg("rating"));
    }

    public function reviews(): MorphMany {
        return $this->morphMany(Review::class, "reviewable");
    }

    public function likes(): MorphMany {
        return $this->morphMany(Like::class, "likable");
    }

    public function getTranslation(string $lang): string {
        return $this->translations->where("language_id",$lang)->first()->translation;
    }

    public function isLiked(): bool {
        $user = Auth::user();
        return $this->likes()->where("user_id", $user->id)->exists();
    }
    public function getRelevantReviews(): Collection {
        return $this->reviews()->withCount("likes")->orderBy("likes_count", "desc")->take(3)->get();
    }

    public function getTotalReviews(): array {
        $totalReviews = [
            "excellent" => ["avg" => 0, "count"=> 0 ],
            "good" => ["avg" => 0, "count"=> 0 ],
            "average" => ["avg" => 0, "count"=> 0 ],
            "bad" => ["avg" => 0, "count"=> 0 ],
            "very_bad" => ["avg" => 0, "count"=> 0 ],
        ];
        $reviewsCount = $this->reviews()->count(); // Get total count of reviews

        foreach ($this->reviews as $review) {
            $rating = $review->rating;
            switch ($rating) {
                case 5:
                    $totalReviews["excellent"]["count"]++;
                    break;
                case 4:
                    $totalReviews["good"]["count"]++;
                    break;
                case 3:
                    $totalReviews["average"]["count"]++;
                    break;
                case 2:
                    $totalReviews["bad"]["count"]++;
                    break;
                case 1:
                    $totalReviews["very_bad"]["count"]++;
                    break;
            }
        }

        // Calculate the averages
        foreach ($totalReviews as &$category) {
            if ($category["count"] > 0) {
                $category["avg"] = $category["count"] / $reviewsCount;
            }
        }
        return $totalReviews;
    }

    public function getMediaUrls(): array {
        $mediaUrls = [];
        foreach ($this->getMedia() as $media) {
            array_push($mediaUrls,$media->getUrl());
        }
        return $mediaUrls;
    }
    public function isReviewed(): bool {
        return $this->reviews()->where("user_id", Auth::user()->id)->exists();
    }
}
