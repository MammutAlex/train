<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 02.02.19
 * Time: 14:10
 */

namespace App\Http\Controllers;

use App\City;
use App\Http\Resources\City as CityResource;


class CitySearchController extends Controller
{
    public function index(string $city)
    {
        return CityResource::collection(City::where('name', 'like', '%' . $city . '%')->get());
    }
}
