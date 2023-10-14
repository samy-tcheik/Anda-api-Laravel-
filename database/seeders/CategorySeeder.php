<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ["id" => "edc5dea7-fb53-4176-ad54-ed8e95ac89f3", "name" => "entertainment"],
            ["id" => "0e8007d0-4554-4878-8501-e4df04522b76", "name" => "art_and_culture"],
            ["id" => "d4afe57a-363a-46ac-af79-a3c1aa2fc9ab", "name" => "natural_sites"],
            ["id" => "b6c565ae-9ffc-4c56-90d6-6b8ed2357499", "name" => "historic_sites"],
            ["id" => "3fcf9bcb-440a-4f3e-9ac4-7e73befe4763", "name" => "recreation_and_relaxation"],
            ["id" => "1842872d-c092-4e0c-918b-169815680997", "name" => "coastal_sites"],
            ["id" => "45bc9433-b0af-496d-849a-088d0b8bfe1d", "name" => "sacred_and_religious_sites"],
        ];

        DB::table("categories")->insert($categories);
    }
}
