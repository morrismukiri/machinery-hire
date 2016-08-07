<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
if (App::environment('production')) { URL::forceSchema('https'); }

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index');
Route::post('/upload', 'HomeController@upload');
Route::get('/upload', 'HomeController@uploadFile');
Route::get('/images/{imageName}/{width?}/{height?}', 'ImagesController@show');

Route::resource('pricing-models', 'PricingModelsController');
Route::resource('pricing-rates', 'PricingRatesController');
Route::resource('categories', 'CategoriesController');