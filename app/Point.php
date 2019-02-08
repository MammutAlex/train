<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Point extends Model
{
    protected $dates = [
        'arrival',
    ];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('arrival');
        });
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
