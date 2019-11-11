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
    Route::get('/crop-media-admin', 'DashboardController@index');

    /* -- Return Slider Page -- */
    Route::resource('/crop-media-admin/slider', 'SliderController');

    /* -- Return Service Page -- */
    Route::resource('/crop-media-admin/service', 'ServiceController');
    Route::get('/crop-media-admin/service/{id}/create', 'ServiceController@createSubService');
    Route::post('/crop-media-admin/sub-service/create', 'ServiceController@storeSub');

    /* -- Return Client Page -- */
    Route::resource('/crop-media-admin/client', 'ClientController');

    /* -- Return Testimonial Page -- */
    Route::resource('/crop-media-admin/testimonial', 'TestimonialController');

    /* -- Return Team Page -- */
    Route::resource('/crop-media-admin/team', 'TeamController');

    /* -- Return Appointment Page -- */
    Route::resource('/crop-media-admin/appointment', 'AppointmentController');

    /* -- Return Video Page -- */
    Route::resource('/crop-media-admin/video', 'VideoController');


    /* -- Return Video Page -- */
    Route::resource('/crop-media-admin/blog', 'BlogController');

    /* -- Return Album Page -- */
    Route::resource('/crop-media-admin/album', 'AlbumController');

    /* -- Return Gallery Page -- */
    Route::resource('/crop-media-admin/gallery', 'GalleryController');
    Route::get('/crop-media-admin/album/{id}/upload-to-gallery', 'AlbumController@uploadPage');
    Route::post('/crop-media-admin/album/{id}/upload-to-gallery', 'AlbumController@upload');

    /* -- Return Message Page -- */
    Route::resource('/crop-media-admin/message', 'MessageController');

    /* -- Return Feature Page -- */
    Route::resource('/crop-media-admin/feature', 'FeatureController');

    /* -- Return Product Page -- */
    Route::resource('/crop-media-admin/product', 'ProductController');

    /*--------  About   --------*/
    Route::get('/crop-media-admin/about/edit', 'AboutController@edit');
    Route::patch('/crop-media-admin/about/update', 'AboutController@update');

    /*--------  Contact   --------*/
    Route::get('/crop-media-admin/contact/edit', 'ContactController@edit');
    Route::patch('/crop-media-admin/contact/update', 'ContactController@update');


    /*--------  Setting   --------*/
    Route::get('/crop-media-admin/setting/edit', 'SettingController@edit');
    Route::patch('/crop-media-admin/setting/update', 'SettingController@update');


    /* -- Return Gallery Page -- */
    Route::resource('/crop-media-admin/gallery', 'GalleryController');
    Route::post('/crop-media-admin/upload-to-gallery', 'GalleryController@uploadImagesToGallery');


    /* -- Project -- */
    Route::resource('/crop-media-admin/project', 'ProjectController');
    Route::delete('/crop-media-admin/project/delete-image/{id}', 'ProjectController@deleteImage');
    Route::get('/crop-media-admin/project/{id}/images', 'ProjectController@projectImages');

});




Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
