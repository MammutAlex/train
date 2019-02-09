<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'route_id',
        'start_point_id',
        'end_point_id',
        'name',
    ];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
