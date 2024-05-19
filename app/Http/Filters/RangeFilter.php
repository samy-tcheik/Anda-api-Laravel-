<?php
namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class RangeFilter implements Filter
    {
        protected $latitude;
        protected $longitude;

        public function __construct($latitude, $longitude)
        {
            $this->latitude = $latitude;
            $this->longitude = $longitude;
        }

        public function __invoke(Builder $query, $value, string $property)
        {
                $query->withinDistanceOf($this->latitude,$this->longitude, $value);
        }
}
