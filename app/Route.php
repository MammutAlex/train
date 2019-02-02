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
}
