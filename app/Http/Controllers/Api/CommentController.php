<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Enums\CommentableType;
use App\Http\Requests\Comment\CommentRequest;
use App\Http\Resources\Comment\CommentResource;
use App\Http\Responses\Comment\DeleteCommentResponse;
use App\Models\Comment;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function index($type, string $id): ResourceCollection {
        $model = CommentableType::fromName($type)->value;
        $comments = $model::find($id)->comments()->paginate();
        return CommentResource::collection($comments);
    }

    public function store(CommentRequest $request,$type, string $id): CommentResource
    {
        $model = CommentableType::fromName($type)->value;

        $validated = $request->validated();
        $comment = new Comment($validated);
        $comment->user()->associate(Auth::user());
        $model::find($id)->comments()->save($comment);
        return CommentResource::make($comment);
    }

    public function update(CommentRequest $request, Comment $comment): CommentResource
    {
        $validated = $request->validated();
        $comment->update($validated);
        $comment->save();
        return CommentResource::make($comment);
    }

    public  function show(Comment $comment): CommentResource
    {
        return CommentResource::make($comment);
    }

    public function delete(Comment $comment): DeleteCommentResponse
    {
        $comment->delete();
        return new DeleteCommentResponse();
    }
}
