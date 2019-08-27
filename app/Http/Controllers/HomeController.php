<?php

namespace App\Http\Controllers;

use App\Group;
use App\Street;

class HomeController extends Controller
{
    /**
     * Return the home view.
     *
     * @return  Responce
     */
    public function __invoke()
    {
        $groups = Group::with('streets')->get();

        $postcodes = Street::whereNotNull('postcode')->orderBy('postcode')->distinct()->pluck('postcode');

        return view('index', compact('groups', 'postcodes'));
    }
}
