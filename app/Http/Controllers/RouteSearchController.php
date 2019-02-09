<?php

namespace App\Http\Controllers;

use App\Http\Requests\RouteSearchRequest;
use App\Route;
use App\Http\Resources\Route as RouteResource;

class RouteSearchController extends Controller
{
    public function index(RouteSearchRequest $request)
    {
        return RouteResource::collection(Route::whereHas('points', function ($query) use ($request) {
            $query->where('city_id', $request->from)->whereDate('arrival', $request->date);
        })->whereHas('points', function ($query) use ($request) {
            $query->where('city_id', $request->to);
        })->with(['points' => function ($query) use ($request) {
            $query->whereIn('city_id', [$request->from, $request->to]);
        }])->get()->filter(function ($route) use ($request) {
            return $route->points[0]->city_id == $request->from;
        }));
    }
}
