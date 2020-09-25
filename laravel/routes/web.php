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

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/dashboard',function (){
        return view('admin.dashboard');
    });
});

Route::prefix('home')->group(function() {

    // The All Route for adverts
    Route::get('/adverts', 'AdvertsController@index')->name('adverts');
    Route::get('/adverts/create', 'AdvertsController@create')->name('advert.create');
    Route::POST('/adverts/store/advert', 'AdvertsController@store')->name('advert.store');
    Route::get('/adverts/show/advert/{id}', 'AdvertsController@show')->name('advert.show');
    Route::get('/adverts/edit/advert/{id}', 'AdvertsController@edit')->name('advert.edit');
    Route::POST('/adverts/update/advert/{id}', 'AdvertsController@update')->name('advert.update');
    Route::POST('/adverts/delete/advert/{id}', 'AdvertsController@destroy')->name('advert.delete');
    
    });

