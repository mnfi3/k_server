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
//  echo  date('Y-m-d h:i:s');
  $dateTime = new DateTime('20190815151358');
  echo $dateTime->format('Y-m-d H:i:s');
});


Route::get('/home', 'HomeController@index')->name('home');




Route::get('/login', function () {
  return view('site.auth.login');
});

Route::get('/', function () {
  return view('site.latest-orders');
});

//Manage Products

Route::get('/manage-products', function () {
  return view('site.manage-product');
});

Route::get('/manage-foods', function () {
  return view('site.manage-products.food');
});

Route::get('/manage-dessert', function () {
  return view('site.manage-products.dessert');
});

Route::get('/dessert-edit', function () {
  return view('site.manage-products.dessert-edit');
});

Route::get('/food-edit', function () {
  return view('site.manage-products.food-edit');
});

Route::get('/categories', function () {
  return view('site.manage-products.categories');
});

Route::get('/category-edit', function () {
  return view('site.manage-products.category-edit');
});

//Reports

Route::get('/today-report',function (){
  return view('site.report.today');
});

Route::get('/all-report',function (){
  return view('site.report.all');
});

//Discount Code

Route::get('/discount-code',function(){
  return view('site.manage-discount.discount-code');
});

Route::get('/discount-edit',function(){
  return view('site.manage-discount.edit');
});

//Profile

Route::get('/profile/image',function(){
  return view('site.profile.image');
});

Route::get('/profile/address',function(){
  return view('site.profile.address');
});

Route::get('/profile/password',function(){
  return view('site.profile.password');
});




