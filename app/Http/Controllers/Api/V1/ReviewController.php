<?php

namespace App\Http\Controllers\Api\V1;

use App\Exceptions\AlreadyReviewedException;
use App\Http\Controllers\Controller;
use App\Http\Enums\ReviewableType;
use App\Http\Requests\Review\ReviewRequest;
use App\Http\Resources\Review\ReviewResource;
use App\Models\Review;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index($type, string $id): ResourceCollection {
        $model = ReviewableType::fromName($type)->value;
        $reviews = $model::find($id)->reviews()->paginate();
        return ReviewResource::collection($reviews);
    }

    public function storeUserReview(ReviewRequest $request,$type, string $id): ReviewResource
    {
        $user = Auth::user();
        $modelType = ReviewableType::fromName($type)->value;
        $model = $modelType::find($id);
        //prevent user add many reviews to same model
        if ($model->isReviewed()) {
            throw new AlreadyReviewedException();
        }

        $validated = $request->validated();
        $review = new Review($validated);
        $review->user()->associate($user);
        $model->reviews()->save($review);
        return ReviewResource::make($review);
    }

    public function showUserReview($type,string $id): ReviewResource {
        $user = Auth::user();
        $model = ReviewableType::fromName($type)->value;
        $review = $model::find($id)->reviews()->where("user_id", $user->id)->first();
        return ReviewResource::make($review);
    }

    public function updateUserReview(ReviewRequest $request, $type, string $id): ReviewResource {
        $modelType = ReviewableType::fromName($type)->value;
        $user = Auth::user();
        $model = $modelType::find($id);
        $validated = $request->validated();
        $review = $model
            ->reviews()
            ->where("user_id", $user->id)
            ->firstOrFail();
        $review->update($validated);

        return ReviewResource::make($review);
    }

}
