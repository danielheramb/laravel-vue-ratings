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

Route::prefix('api')->group(function() {
  Route::resource('fundraisers','FundraiserController');
  //Route::resource('reviews', 'ReviewController');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::redirect('/home', '/');


Route::get('/test/1', function() {
  $admin_name = config('booster.admin_name');
  $admin_email = config('booster.admin_email');
  $admin_user_id = DB::table('users')->where('email', $admin_email)->value('id');
  var_dump($admin_email);
  var_dump($admin_user_id);
});

Route::get('/test/2', function() {
  $admin_password = config('booster.admin_password');
  var_dump($admin_password);
});
