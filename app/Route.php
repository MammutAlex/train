<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function train()
    {
        return $this->belongsTo(Train::class);
    }

    public function points()
    {
        return $this->hasMany(Point::class);
    }

    public function getNameAttribute()
    {
        $start = $this->points()->first()->city->name;
        $end = $this->points()->orderBy('arrival', 'desc')->first()->city->name;
        return "{$this->train->number} {$this->train->name} ({$start} -> {$end})";
    }
}
