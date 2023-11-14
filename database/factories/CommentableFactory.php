<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "comment_id" => Comment::all()->random()->id,
            "commentable_type" => Place::class,
            "commentable_id" => Place::all()->random()->id
        ];
    }
}
