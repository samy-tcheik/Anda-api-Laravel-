<?php
namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class RangeFilter implements Filter
    {
        public function __invoke(Builder $query, $value, string $property)
        {
            if ($value["range"]) {
                $query->withinDistanceOf($value["latitude"],$value["longitude"], $value["range"])->addDistanceFromField($value["latitude"],$value["longitude"]);
            }
        }
}
