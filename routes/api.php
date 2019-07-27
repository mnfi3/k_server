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


//user auth routes
Route::post('v1/login', 'Api\UserAuthController@login');
Route::get('v1/user', 'Api\UserAuthController@user');
Route::post('v1/logout', 'Api\UserAuthController@logout');


//kiosk auth
Route::post('v1/kiosk/login', 'Api\KioskAuthController@login');
Route::post('v1/kiosk/logout', 'Api\KioskAuthController@logout');








Route::get('/test', function (){
  return 'hello from api auth';
})->middleware('auth:api');
