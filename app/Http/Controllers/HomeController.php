<?php

namespace App\Http\Controllers;

use App\Group;

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

        return view('index', compact('groups'));
    }
}
