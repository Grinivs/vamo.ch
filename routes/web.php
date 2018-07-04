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

/* Home-Seite */
Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
  return view('home');
});





/* Routes for the complette Shopping-area */
Route::get('checkout', function (){
    return view('shop/checkout');
});

Route::get('shop.shoppingcard', [
  'uses' => 'ProductController@getCart',
  'as' => 'product.shoppingcard'
]);

Route::get('/checkout', [
  'uses' => 'ProductController@getCheckout',
  'as' => 'checkout'
]);

Route::post('/checkout', [
  'uses' => 'ProductController@postCheckout',
  'as' => 'checkout'
]);

Route::get('shop-payment', function (){
    return view('shop/shop-payment');
});

Route::get('shop-login', function (){
    return view('auth/shop-login');
});

Route::get('shop', function () {
  return view('shop/shop');
});

Route::get('shop-login', function () {
  return view('auth/shop-login');
});

Route::get('shop', [
  'uses' => 'ProductController@getIndex',
  'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
  'uses' => 'ProductController@getAddToCart',
  'as' => 'product.addToCart'
]);

Route::post('/add-to-cart/{id}', [
  'uses' => 'ProductController@getAddToCart',
  'as' => 'product.addToCart'
]);


/* Routes for the About-Sector */
Route::get('about', function () {
  return view('about/deinsale');
});



/* Login / Registration Routes */
Route::get('signup', function () {
  return view('signup');
});

Route::group(['middleware' => 'guest'], function() {
  Route::get('signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
  ]);

  Route::post('signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
  ]);

  Route::get('signin', [
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
  ]);

  Route::post('signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
  ]);
});


Route::get('profile', [
  'uses' => 'UserController@getProfile',
  'as' => 'user.profile',
  'middleware' => 'auth'
]);

Route::get('profile', function () {
  return view('user/profile');
});

Route::get('logout', [
  'uses' => 'UserController@getLogout',
  'as' => 'user.logout',
  'middleware' => 'auth'
]);

Route::post('logout', [
  'uses' => 'UserController@getLogout',
  'as' => 'user.logout',
  'middleware' => 'auth'
]);



/* Voyages Routes */
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
