<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            ["id" => "871d73c9-c65d-476a-97f0-929fff2707c3", "name" => "english"],
            ["id" => "0c5ba6c7-aa63-45f6-bc2b-abe7e0bcf27f", "name" => "frensh"],
            ["id" => "29a02b6b-1e5e-4db9-bf25-ba362704fa73", "name" => "arabic"],
        ];
        DB::table("languages")->insert($languages);
    }
}
