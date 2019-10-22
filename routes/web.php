<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
  $date = new \App\Http\Controllers\Util\Pdate();
  return $date->toGregorian('1398/01/24');
});



//auth routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::get('/test', function () {
  $restaurant = \App\User::find(1);
  $categories = $restaurant->categories;
  foreach ($categories as $category){
    foreach ($category->products as $product){
      $product->desserts;
    }
  }

  //()->where('is_available', '=', 1)->get()

  return \App\Http\Controllers\Api\Webservice\ws::r(1, ['products' => $categories]);
});


Route::get('/home', 'HomeController@index')->name('home');




Route::get('/restaurant/panel', 'Panel\RestaurantPanelController@index');
Route::get('/restaurant/panel/order/deliver/{id}', 'Panel\RestaurantPanelController@orderDelivered');
Route::get('/restaurant/panel/manage-foods', 'Panel\RestaurantPanelController@products');
Route::post('/restaurant/panel/insert/food', 'Panel\RestaurantPanelController@insertProduct');
Route::get('/restaurant/panel/food-edit/{id}', 'Panel\RestaurantPanelController@productEdit');
Route::post('/restaurant/panel/food-update', 'Panel\RestaurantPanelController@productUpdate');
Route::post('/restaurant/panel/food-delete', 'Panel\RestaurantPanelController@productDelete');
Route::get('/restaurant/panel/food/available/{id}', 'Panel\RestaurantPanelController@productAvailable');
Route::get('/restaurant/panel/categories', 'Panel\RestaurantPanelController@categories');
Route::post('/restaurant/panel/category/insert', 'Panel\RestaurantPanelController@categoryInsert');
Route::get('/restaurant/panel/category-edit/{id}', 'Panel\RestaurantPanelController@categoryEdit');
Route::post('/restaurant/panel/category/update', 'Panel\RestaurantPanelController@categoryUpdate');
Route::post('/restaurant/panel/category/delete', 'Panel\RestaurantPanelController@categoryDelete');
Route::get('/restaurant/panel/manage-dessert', 'Panel\RestaurantPanelController@desserts');
Route::post('/restaurant/panel/dessert/insert', 'Panel\RestaurantPanelController@dessertInsert');
Route::get('/restaurant/panel/dessert-edit/{id}', 'Panel\RestaurantPanelController@dessertEdit');
Route::post('/restaurant/panel/dessert/update', 'Panel\RestaurantPanelController@dessertUpdate');
Route::post('/restaurant/panel/dessert/delete', 'Panel\RestaurantPanelController@dessertDelete');
Route::get('/restaurant/panel/dessert/available/{id}', 'Panel\RestaurantPanelController@dessertAvailable');

//Reports
Route::get('/restaurant/panel/today-report', 'Panel\RestaurantPanelController@todayReport');
Route::get('/restaurant/panel/all-report', 'Panel\RestaurantPanelController@report');

//Discount Code
Route::get('/restaurant/panel/discount-code', 'Panel\RestaurantPanelController@discount');
Route::post('/restaurant/panel/discount/insert', 'Panel\RestaurantPanelController@discountInsert');
Route::get('/restaurant/panel/discount-edit/{id}', 'Panel\RestaurantPanelController@discountEdit');
Route::post('/restaurant/panel/discount/update', 'Panel\RestaurantPanelController@discountUpdate');
Route::post('/restaurant/panel/discount/delete', 'Panel\RestaurantPanelController@discountDelete');

//Profile
Route::get('/restaurant/panel/profile/image', 'Panel\RestaurantPanelController@profileImage');
Route::post('/restaurant/panel/profile/image/insert', 'Panel\RestaurantPanelController@profileImageInsert');
Route::get('/restaurant/panel/profile/address', 'Panel\RestaurantPanelController@address');
Route::post('/restaurant/panel/profile/address/update', 'Panel\RestaurantPanelController@addressUpdate');

Route::get('/restaurant/panel/profile/password', 'Panel\RestaurantPanelController@password');
Route::post('/restaurant/panel/profile/password/update', 'Panel\RestaurantPanelController@passwordUpdate');










//system admin sections

Route::get('/admin/home', 'Admin\AdminController@index');
Route::post('/admin/kiosk/insert', 'Admin\AdminController@kioskInsert');
Route::get('/admin/kiosk-edit/{id}', 'Admin\AdminController@kioskEdit');
Route::post('/admin/kiosk/update', 'Admin\AdminController@kioskUpdate');



Route::get('/admin/res', 'Admin\AdminController@restaurants');
Route::post('/admin/res/insert', 'Admin\AdminController@restaurantInsert');
Route::get('/admin/res-edit/{id}', 'Admin\AdminController@restaurantEdit');
Route::post('/admin/res/update', 'Admin\AdminController@restaurantUpdate');




