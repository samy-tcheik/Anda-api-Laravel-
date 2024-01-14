<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $places = Place::all();
        foreach ($places as $place) {
            // Get the path to the directory containing your media files
            $mediaDirectory = storage_path("app/images/{$place->id}");
            // Iterate through each product and associate media
            // Get the list of media files in the directory
            $mediaFiles = File::allFiles($mediaDirectory);
            // Associate each media file with the product
            foreach ($mediaFiles as $mediaFile) {
                $place->addMedia($mediaFile)->preservingOriginal()->toMediaCollection();
            }
        }
    }
}
