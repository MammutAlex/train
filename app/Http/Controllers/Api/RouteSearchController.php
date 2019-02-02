<?php

namespace App\Http\Controllers\Api;

use App\Route;
use App\Http\Controllers\Controller;

class RouteSearchController extends Controller
{
    public function index(int $start, int $end, string $date)
    {
        Route::whereHas('point', function ($query) use ($start, $end, $date) {
            $query->where('city_id', $start)->orWhere('city_id', $end);
        })->get();
    }
}
