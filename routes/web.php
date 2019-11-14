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

Route::get('/', function () {
    return view('welcome');
});




Route::group(['middleware' => ['Maintenance', 'Lang']], function () {

    Route::get('lang/{lang}', 'LanguageController@changeLanguage');

    /*=======   Return Home     ========*/
    Route::get('/', 'WebsitePagesController@index');

    /*=======   Return about    ========*/
    Route::get('/about', 'WebsitePagesController@about');
    Route::get('/team', 'WebsitePagesController@team');

    /*=======   Return Service    ========*/
    Route::get('/service', 'WebsitePagesController@service');
//    Route::get('/service/{id}', 'ServicesController@show')->name('show service');

    /*=======   Return Service Details     ========*/
    Route::get('/service-details/{id}', 'WebsitePagesController@service_details')->name('service_details');

    /*=======   Return Contact     ========*/
    Route::get('/contact', 'WebsitePagesController@contact');
    Route::post('message', 'WebsitePagesController@message');

    /*=======   Return Portfolio     ========*/
    Route::get('/portfolio', 'WebsitePagesController@project');
    Route::get('/project/{id}', 'WebsitePagesController@projectDetails');

    /*=======   Return Client     ========*/
    Route::get('/client', 'WebsitePagesController@client');

    /*=======   Return buildCamp     ========*/
    Route::get('/buildCamp', 'WebsitePagesController@buildCamp');
    Route::get('/serviceDetails/{id}', 'WebsitePagesController@service_details');
    Route::post('/add/buildCamp', 'WebsitePagesController@add_buildCamp');

    /*=======   Return service     ========*/
    Route::get('/services', 'WebsitePagesController@service');
    Route::get('/serviceDetails/{id}', 'WebsitePagesController@service_details');
    Route::get('/child_location/{id}', 'WebsitePagesController@child_location');


});




Route::get('maintenance', function () {
    return 'maintenance';
});


Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@campaign')->name('home');
