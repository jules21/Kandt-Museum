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

Route::get('/','ArtifactController@show');
Route::get('/about',function(){
  return view('about');
});
Route::get('/contact',function(){
  return view('contact');
});
Route::get('/ticket',function(){
  return view('ticket');
});
Route::get('/gallery',function(){
  return view('gallery');
});
Route::get('/event',function(){
  return view('event');
});
Route::get('barcode', 'HomeController@barcode');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'AdminController@index');
    Route::resource('/artifact', 'ArtifactController');
    Route::resource('/visitschedule', 'VisitScheduleController');
    Route::resource('/artifactcategories', 'ArtifactCategoryController');
    Route::resource('users', 'UsersController');
    Route::resource('locations', 'LocationController');
    Route::resource('exhibitions', 'ExhibitionController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
