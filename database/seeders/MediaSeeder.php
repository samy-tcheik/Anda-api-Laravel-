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
        $places = Place::whereIn("id", ["0bfd96db-ceb8-417f-998f-4818c58e3a8c","423777f6-e3ac-4742-9235-14bf0896b1db","d979f84e-e17f-4177-aed8-df985aadac4c"])->get();
        foreach ($places as $place) {
            // Get the path to the directory containing your media files
            $mediaDirectory = storage_path("app/images/{$place->id}");
            // Iterate through each product and associate media
            $place = Place::find($place->id);
            // Get the list of media files in the directory
            $mediaFiles = File::allFiles($mediaDirectory);
            // Associate each media file with the product
            foreach ($mediaFiles as $mediaFile) {
                $place->addMedia($mediaFile)->preservingOriginal()->toMediaCollection();
            }
        }
    }
}
