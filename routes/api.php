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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//auth routes
Route::post('v1/login', 'Api\PassportController@login');
Route::middleware('auth:api')->group(function () {
  Route::get('v1/user', 'Api\PassportController@user');
  Route::post('v1/logout', 'Api\PassportController@logout');
});





Route::get('/test', function (){
  return 'hello from api auth';
})->middleware('auth:api');
