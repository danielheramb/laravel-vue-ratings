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
  Route::get('fundraisers/user-reviews/{user}', 'FundraiserController@withUserReviews');
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

Route::get('/test/3', function() {
  #$fundraisers = App\Fundraiser::with('reviews:id,user_id,rating')->where('id','<',20)->get()->toArray();
  #$fundraisers = DB::table('fundraisers')->pluck('id');
  #var_dump($fundraisers);

  $fundraiser = App\Fundraiser::find(1);
  #var_dump($fundraiser);

  $reviews = App\Fundraiser::find(1)->reviews;
  $rating = App\Fundraiser::find(1)->rating();
  echo "<pre>"; var_dump($reviews); echo "</pre>";

  #$reviewers = DB::table('users')->pluck('id')->all();
  #var_dump($reviewers);
  #echo "<pre>"; var_dump($fundraisers); echo "</pre>";

  /*
  foreach ($fundraisers as $fundraiser) {
    echo $fundraiser->name;
    foreach ($fundraiser->reviews as $review) {
      echo $review->rating;
    }
  }
  */

  //$reviews = $fundraiser->ratings();
  //var_dump($reviews);
});
