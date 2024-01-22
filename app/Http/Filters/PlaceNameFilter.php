<?php

namespace App\Http\Filters;

use App\Models\Language;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\Filters\Filter;

class PlaceNameFilter implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $request = request();
        $langaugeId = Language::where("code", $request->header("Accept-Language"))->first()->id;
        $query->with(["translations" => function($q) use($langaugeId) {
            $q->where("translations.language_id", $langaugeId);
        }])->whereHas("translations", function($q) use($value){
            $q->where("translation","like", "%{$value}%");
        });
    }
}



