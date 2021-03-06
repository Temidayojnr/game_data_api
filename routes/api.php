<?php

use Illuminate\Http\Request;

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

Route::get('v1/players', 'PlayerController@index');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1/games', 'GameController@index');

// This route gets all the players in the system 


// This route gets a single players 
Route::get('v1/players/{id}', 'PlayerController@getSinglePlayer');
