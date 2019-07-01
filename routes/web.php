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

Route::get('stripe', 'StripeController@stripe');
Route::post('payment', 'StripeController@payStripe');

// Route::get('stripe', 'StripePaymentController@stripe');
// Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

// Route::get('contact-us', 'ContactUSController@contactUS');
// Route::post('contact-us', ['as' => 'contactus.store', 'uses' => '   @contactUSPost']);
//
Route::get('/barcode', 'HomeController@barcode');
Route::get('/', 'HomeController@index');
Route::get('/artifact', 'HomeController@artifact');
Route::get('/ticket', 'HomeController@ticket')->middleware(['auth']);
Route::get('/booking/{id?}', 'HomeController@booking')->name('event.booking');
Route::post('/event', 'HomeController@bookTicket')->name('bookTicket');
Route::get('/buy', 'HomeController@buy');
Route::get('/about', 'HomeController@about');
Route::get('/event', 'HomeController@event');
Route::get('/event/{id?}', 'HomeController@showEvent')->name('event.show');
Route::get('/artifact/{id?}', 'HomeController@showArt')->name('art.show');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@contactUSPost')->name('contactus.store');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::get('/work', 'HomeController@workTime');
// Route::post('/ticket', 'HomeController@bookTicket')->name('bookTicket');

Route::group(['prefix' => 'admin', 'middleware' => 'isManager'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('manager.dashboard');;
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
