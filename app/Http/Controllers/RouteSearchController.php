<?php

namespace App\Http\Controllers;

use App\Http\Requests\RouteSearchRequest;
use App\Route;
use App\Http\Resources\Route as RouteResource;

class RouteSearchController extends Controller
{
    public function index(RouteSearchRequest $request)
    {
        return RouteResource::collection(Route::limit(5)->get());
    }
}
