<?php

namespace App\Http\Controllers;

use App\Route;

class RouteSearchController extends Controller
{
    public function index(int $start, int $end, string $date)
    {
        Route::whereHas('point', function ($query) use ($start, $end, $date) {
            $query->where('city_id', $start)->orWhere('city_id', $end);
        })->get();
    }
}
