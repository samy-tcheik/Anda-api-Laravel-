<?php

namespace Database\Seeders;

use App\Models\Commentable;
use Database\Factories\CommentableFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Commentable::factory()->count(100)->create();
    }
}
