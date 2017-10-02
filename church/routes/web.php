<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('aboutus/church', 'AboutUsController@church');
Route::get('aboutus/sundayschool', 'AboutUsController@sundayschool');
Route::get('aboutus/mgocsm', 'AboutUsController@mgocsm');
Route::get('aboutus/prayer', 'AboutUsController@prayer');
Route::get('gallery', 'GalleryController@index');
Route::get('gallery/album', 'GalleryController@album');
Route::get('gallery/item', 'GalleryController@item');
Route::get('home', 'HomeController@index');

