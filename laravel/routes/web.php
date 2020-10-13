<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('dashboard')->group(function() {

    Route::resource('/categories', 'CategoryController');
    // The All Route for Cars
    Route::get('/categories', 'CategoryController@index')->name('category');
    Route::get('/categories/create', 'CategoryController@create')->name('category.create');
    Route::POST('/categories/store/category', 'CategoryController@store')->name('category.store');
    Route::get('/categories/show/category/{id}', 'CategoryController@show')->name('category.show');
    Route::get('/categories/edit/category/{id}', 'CategoryController@edit')->name('category.edit');
    Route::POST('/categories/update/category/{id}', 'CategoryController@update')->name('category.update');
    Route::POST('/categories/delete/category/{id}', 'CategoryController@destroy')->name('category.delete');
    Route::post('/categories/{category}', 'CategoryController@completedUpdate')->name('completedUpdate');

    // The All Route for adverts
    Route::get('/adverts', 'AdminAdvertsController@index')->name('advert');
    Route::get('/adverts/create', 'AdminAdvertsController@create')->name('advert.create');
    Route::POST('/adverts/store/advert', 'AdminAdvertsController@store')->name('advert.store');
    Route::get('/adverts/show/advert/{id}', 'AdminAdvertsController@show')->name('advert.show');
    Route::get('/adverts/edit/advert/{id}', 'AdminAdvertsController@edit')->name('advert.edit');
    Route::POST('/adverts/update/advert/{id}', 'AdvertsController@update')->name('advert.update');
    Route::POST('/adverts/delete/advert/{id}', 'AdminAdvertsController@destroy')->name('advert.delete');
});
Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/dashboard',function (){
        return view('admin.dashboard');
    });
});

Route::prefix('home')->group(function() {
    Route::resource('booking', 'BookingController');

    // The All Route for adverts
    Route::get('/adverts', 'AdvertsController@index')->name('advert');
    Route::get('/adverts/create', 'AdvertsController@create')->name('advert.create');
    Route::POST('/adverts/store/advert', 'AdvertsController@store')->name('advert.store');
    Route::get('/adverts/show/advert/{id}', 'AdvertsController@show')->name('advert.show');
    Route::get('/adverts/edit/advert/{id}', 'AdvertsController@edit')->name('advert.edit');
    Route::POST('/adverts/update/advert/{id}', 'AdvertsController@update')->name('advert.update');
    Route::POST('/adverts/delete/advert/{id}', 'AdvertsController@destroy')->name('advert.delete');
    });

