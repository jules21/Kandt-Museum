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
Route::get('/', 'ArtifactController@show');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::POST('/contact', function () {
    $to = 'julesfabien96@gmail.com';
    $firstname = $_POST["fname"];
    $email = $_POST["email"];
    $text = $_POST["message"];
    $phone = $_POST["phone"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message = '<table style="width:100%">
        <tr>
            <td>' . $firstname . '  ' . $laststname . '</td>
        </tr>
        <tr><td>Email: ' . $email . '</td></tr>
        <tr><td>phone: ' . $phone . '</td></tr>
        <tr><td>Text: ' . $text . '</td></tr>

    </table>';

    if (@mail($to, $email, $message, $headers)) {
        echo 'The message has been sent.';
    } else {
        echo 'failed';
    }
})->name('sendEmail');
Route::get('/ticket', function () {
    return view('ticket');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/event', function () {
    return view('event');
});

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
