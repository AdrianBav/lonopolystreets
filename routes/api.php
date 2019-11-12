<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/meta', function () {
    return [
        'item1' => 'has %d streets',
        'number1' => 24,
        'item2' => 'with %d photos',
        'number2' => 24,
        'info' => 'ALL streets',
    ];
});
