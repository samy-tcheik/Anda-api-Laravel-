<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\HistoryController;
use App\Http\Controllers\Api\LikeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VerificationController;
use App\Http\Controllers\Api\PlaceController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\WilayaController;
use App\Http\Controllers\Api\TownController;
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
Route::get('auth/verify-email', [VerificationController::class, "verify"])->name('verify-email');


Route::middleware("auth:sanctum")->group(function () {
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
    Route::get("places/discover", [PlaceController::class, "discover"])->name("places.discover");
    Route::post("places/{place}/rating", [PlaceController::class, "updateRating"])->name("place.rating-update");
    Route::get("places/{place}/rating", [PlaceController::class, "getRating"])->name("place.get-rating");
    Route::apiResource("places", PlaceController::class);
    //categories
    Route::apiResource("categories", CategoryController::class);
    //comments
    Route::get("comments/{type}/{model}", [CommentController::class, "index"])->name("comments.index");
    Route::post("comments/{type}/{model}", [CommentController::class, "store"])->name("comments.store");
    Route::get("comments/{comment}", [CommentController::class, "show"])->name("comments.show");
    Route::put("comments/{comment}", [CommentController::class, "update"])->name("comments.update");
    Route::delete("comments/{comment}", [CommentController::class, "delete"])->name("comments.delete");
    //likes
    Route::post("likes/{type}/{model}", [LikeController::class, "store"])->name("likes.store");
    Route::delete("likes/{type}/{model}", [LikeController::class, "delete"])->name("like.delete");

    //history
    Route::get("history", [HistoryController::class, "index"])->name("history.index");
    Route::post("history/{place}", [HistoryController::class, "store"])->name("history.store");
});
