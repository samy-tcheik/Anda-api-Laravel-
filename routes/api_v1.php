<?php

use App\Http\Controllers\Api\V1\Auth\AuthController;
use App\Http\Controllers\Api\V1\Auth\CodeCheckController;
use App\Http\Controllers\Api\V1\Auth\ForgetPasswordController;
use App\Http\Controllers\Api\V1\Auth\GoogleAuthController;
use App\Http\Controllers\Api\V1\Auth\ResetPasswordController;
use App\Http\Controllers\Api\V1\CategoryController;
use App\Http\Controllers\Api\V1\HistoryController;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\LikeController;
use App\Http\Controllers\Api\V1\PlaceController;
use App\Http\Controllers\Api\V1\ReviewController;
use App\Http\Controllers\Api\V1\TownController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\VerificationController;
use App\Http\Controllers\Api\V1\WilayaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/google/login', GoogleAuthController::class);
Route::get('auth/verify-email', [VerificationController::class, "verify"])->name('verify-email');

//reset password
Route::post('auth/forget-password', ForgetPasswordController::class)->name("forget-password");
Route::post("auth/code-check", CodeCheckController::class)->name("code-check");
Route::post("auth/reset-password",ResetPasswordController::class)->name("reset-password");


Route::middleware(["auth:sanctum", "verified"])->group(function () {
    Route::get('/auth/profile', [AuthController::class, 'profile']);
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    // users
    Route::patch("/user/update-position", [UserController::class, "updatePosition"]);
    Route::patch("/user/update", [UserController::class, "update"]);
    Route::get("/user", [UserController::class, "show"]);
    Route::post("/user/update-avatar", [UserController::class, "updateAvatar"]);
    Route::delete("/user", [UserController::class, "delete"]);
    //wilayas
    Route::apiResource("wilayas", WilayaController::class);
    //towns
    Route::get("towns/{wilaya}", [TownController::class, "wilaya_town"]);
    //places
    Route::get("places/nearby", [PlaceController::class, "nearby"])->name("places.nearby");
    Route::get("places/home", HomeController::class)->name("places.home");
    Route::get("places/discover", [PlaceController::class, "discover"])->name("places.discover");
    Route::apiResource("places", PlaceController::class);
    //categories
    Route::apiResource("categories", CategoryController::class);

    //reviews
    Route::get("reviews/{type}/{model}", [ReviewController::class, "index"])->name("reviews.index");
    Route::post("reviews/user/{type}/{model}", [ReviewController::class, "storeUserReview"])->name("reviews.storeUserReview");
    Route::get("reviews/user/{type}/{model}", [ReviewController::class, "showUserReview"])->name("reviews.showUserReview");
    Route::put("reviews/user/{type}/{model}", [ReviewController::class, "updateUserReview"])->name("reviews.updateUserReview");

    //likes
    Route::get("likes", [LikeController::class, "index"])->name("like.index");
    Route::post("likes/{type}/{model}", [LikeController::class, "store"])->name("likes.store");

    //history
    Route::get("history", [HistoryController::class, "index"])->name("history.index");
});
