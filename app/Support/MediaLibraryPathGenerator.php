<?php

namespace App\Support;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator;

class MediaLibraryPathGenerator extends DefaultPathGenerator
{
    /*
        * Get a unique base path for the given media.
        */
    protected function getBasePath(Media $media): string
    {
        return "{$media->model_type}/{$media->getAttribute('model_id')}/{$media->getAttribute('uuid')}" ;
    }
}
