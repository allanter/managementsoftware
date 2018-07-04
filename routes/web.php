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

/* 
Route::get('/', function () {
    //return view('welcome');
    return view('Welcome');
});
*/

/*
Route::get('/login', function () {
    // get info straight from Resource/views/pages blade files.
    return view('pages.login');
});

Route::get('/registration', function () {
    
    return view('pages.registration');
});

Route::get('/downloads', function () {
    
    return view('pages.downloads');
});

Route::get('/misc', function () {
    
    return view('pages.misc');
});

Route::get('/extrapage', function () {
    
    return view('pages.extrapage');
});
*/

Route::get('/registration', 'PagesController@registration');
Route::get('/downloads', 'PagesController@downloads');

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
// related to posts controller to for a GET request

Route::post('/checklogin', 'PagesController@checklogin');

Route::get('/login', 'PagesController@login');
//after successful login

Route::get('/logout', 'PagesController@logout');
