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

Route::middleware('auth:api')->get('/academic', function (Request $request) {
    return $request->user();
});

Route::prefix('academic')->group(function() {
	Route::prefix('public')->group(function() {
		Route::get('/schedule', 'ApiController@schedule_api');
		Route::get('/assigned_instructors', 'ApiController@assigned_instructors_api');
	});
});
