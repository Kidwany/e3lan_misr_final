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

/*==============================================   Dashboard Routes    ====================================================*/

Route::group(['middleware' => 'auth' ,'namespace' => 'Dashboard'], function () {


    /* -- Return Home Page -- */
    Route::get('/e3lan-misr-admin', 'DashboardController@index');

    /* -- Return Slider Page -- */
    Route::resource('/e3lan-misr-admin/slider', 'SliderController');

    /* -- Return Service Page -- */
    Route::resource('/e3lan-misr-admin/service', 'ServiceController');
    Route::get('/e3lan-misr-admin/service/{id}/create', 'ServiceController@createSubService');
    Route::post('/e3lan-misr-admin/sub-service/create', 'ServiceController@storeSub');

    /* -- Return Client Page -- */
    Route::resource('/e3lan-misr-admin/client', 'ClientController');

    /* -- Return Testimonial Page -- */
    Route::resource('/e3lan-misr-admin/testimonial', 'TestimonialController');

    /* -- Return Team Page -- */
    Route::resource('/e3lan-misr-admin/team', 'TeamController');

    /* -- Return Appointment Page -- */
    Route::resource('/e3lan-misr-admin/appointment', 'AppointmentController');

    /* -- Return Video Page -- */
    Route::resource('/e3lan-misr-admin/video', 'VideoController');


    /* -- Return Video Page -- */
    Route::resource('/e3lan-misr-admin/blog', 'BlogController');

    /* -- Return Album Page -- */
    Route::resource('/e3lan-misr-admin/album', 'AlbumController');

    /* -- Return Gallery Page -- */
    Route::resource('/e3lan-misr-admin/gallery', 'GalleryController');
    Route::get('/e3lan-misr-admin/album/{id}/upload-to-gallery', 'AlbumController@uploadPage');
    Route::post('/e3lan-misr-admin/album/{id}/upload-to-gallery', 'AlbumController@upload');

    /* -- Return Message Page -- */
    Route::resource('/e3lan-misr-admin/message', 'MessageController');

    /* -- Return Feature Page -- */
    Route::resource('/e3lan-misr-admin/feature', 'FeatureController');

    /* -- Return Product Page -- */
    Route::resource('/e3lan-misr-admin/product', 'ProductController');

    /*--------  About   --------*/
    Route::get('/e3lan-misr-admin/about/edit', 'AboutController@edit');
    Route::patch('/e3lan-misr-admin/about/update', 'AboutController@update');

    /*--------  Contact   --------*/
    Route::get('/e3lan-misr-admin/contact/edit', 'ContactController@edit');
    Route::patch('/e3lan-misr-admin/contact/update', 'ContactController@update');


    /*--------  Setting   --------*/
    Route::get('/e3lan-misr-admin/setting/edit', 'SettingController@edit');
    Route::patch('/e3lan-misr-admin/setting/update', 'SettingController@update');


    /* -- Return Gallery Page -- */
    Route::resource('/e3lan-misr-admin/gallery', 'GalleryController');
    Route::post('/e3lan-misr-admin/upload-to-gallery', 'GalleryController@uploadImagesToGallery');


    /* -- Project -- */
    Route::resource('/e3lan-misr-admin/project', 'ProjectController');
    Route::delete('/e3lan-misr-admin/project/delete-image/{id}', 'ProjectController@deleteImage');
    Route::get('/e3lan-misr-admin/project/{id}/images', 'ProjectController@projectImages');

});




Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
