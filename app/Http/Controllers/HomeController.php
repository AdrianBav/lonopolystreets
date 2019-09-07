<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Return the home view.
     *
     * @return  Responce
     */
    public function __invoke()
    {
        return view('index');
    }
}
