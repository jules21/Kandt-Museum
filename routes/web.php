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
// Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as' => 'contactus.store', 'uses' => 'AdminController@contactUSPost']);
//
// Route::get('/', 'ArtifactController@show');
Route::get('/', 'HomeController@index');

Route::get('/ticket', 'HomeController@ticket');
Route::get('/about', 'HomeController@about');
Route::get('/event', 'HomeController@event');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/contact', 'HomeController@contact');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::post('/ticket', 'HomeController@bookTicket')->name('bookTicket');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'AdminController@index');
    Route::get('/profile', 'AdminController@profile')->name('manager.profile');
    Route::post('/profile/{id?}/edit', 'AdminController@editProfile')->name('manager.editProfile');
    Route::resource('/artifact', 'ArtifactController');
    Route::resource('/visitschedule', 'VisitScheduleController');
    Route::resource('/artifactcategories', 'ArtifactCategoryController');
    Route::resource('users', 'UsersController');
    Route::resource('locations', 'LocationController');
    Route::resource('exhibitions', 'ExhibitionController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
