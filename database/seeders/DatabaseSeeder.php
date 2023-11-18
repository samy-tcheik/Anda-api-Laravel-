<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LanguageSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            WilayaSeeder::class,
            TownSeeder::class,
            PlaceSeeder::class,
            DescriptionSeeder::class,
            TranslationSeeder::class,
            TranslatableSeeder::class,
        ]);
    }
}
