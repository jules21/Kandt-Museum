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
Route::group(['prefix' =>'admin','middleware' => 'auth'], function(){
    Route::get('/dashboard', function () {
        return view('layouts.layout');
    });
    Route::resource('/artifact', 'ArtifactController');
    Route::resource('/visitschedule', 'VisitScheduleController');
    Route::resource('/artifactcategories', 'ArtifactCategoryController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
