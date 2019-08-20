<?php

namespace App\Http\Controllers;

use App\Location;

class HomeController extends Controller
{
    /**
     * Return the home view.
     *
     * @return  Responce
     */
    public function __invoke()
    {
        $locations = Location::with('properties')->get();

        return view('index', compact('locations'));
    }
}
