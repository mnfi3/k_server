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

Route::get('/restaurant/panel/latest-orders', 'Panel\RestaurantPanelController@latestOrders');
//Route::get('/test', function (){
//  foreach (getallheaders() as $name => $value) {
//    echo "$name: $value\n"."<hr>";
//  }
//});


//user auth routes
Route::post('v1/login', 'Api\Auth\UserAuthController@login');
Route::get('v1/user', 'Api\Auth\UserAuthController@user');
Route::post('v1/logout', 'Api\Auth\UserAuthController@logout');


//kiosk auth
Route::post('v1/kiosk/login', 'Api\Auth\KioskAuthController@login');
Route::get('v1/kiosk/login/check', 'Api\Auth\KioskAuthController@loginCheck');
Route::post('v1/kiosk/logout', 'Api\Auth\KioskAuthController@logout');

//kiosk api
Route::get('v1/kiosk/users', 'Api\KioskController@users');


//restaurant apis
Route::get('v1/restaurant/info', 'Api\RestaurantController@restaurantInfo');
Route::get('v1/restaurant/products', 'Api\RestaurantController@products');
Route::post('v1/restaurant/discount-validate', 'Api\RestaurantController@discountValidate');
//Route::post('v1/restaurant/order', 'Api\RestaurantController@order');
Route::post('v1/restaurant/orders', 'Api\RestaurantController@orders');










Route::get('/kiosk-token', function (Request $request){
 $tm = new \App\Http\Controllers\Api\Crypt\TokenManager();
 $token = $tm->generateToken(\App\Kiosk::find(1)->token);
 return \App\Http\Controllers\Api\Webservice\ws::r(1, ['token' => $token]);
});



Route::get('/test2', function (Request $request){});






Route::get('/token', function (){
  $tm = new \App\Http\Controllers\Api\Crypt\TokenManager();
  return $tm->generateToken("MjAxOS0wOC0wNCAwNDo0Mjo1MGtpb3NrMTE1NjQ5MjA3NzA=");
});
