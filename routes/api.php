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
Route::post('v1/login', 'Api\Auth\UserAuthController@login');
Route::get('v1/user', 'Api\Auth\UserAuthController@user');
Route::post('v1/logout', 'Api\Auth\UserAuthController@logout');


//kiosk auth
Route::post('v1/kiosk/login', 'Api\Auth\KioskAuthController@login');
Route::post('v1/kiosk/logout', 'Api\Auth\KioskAuthController@logout');


Route::post('/test1', function (Request $request){
  $json = new \Psy\Util\Json();
  header("Accept:application/json");
  $json->name = $request->name;
  $json->family = $request->family;
  return \App\Http\Controllers\Api\Webservice\ws::r(1, $json, 200, "ok from server");
//  return json_encode($json, JSON_UNESCAPED_UNICODE);
});






Route::get('/test', function (){
  return 'hello from api auth';
})->middleware('auth:api');
