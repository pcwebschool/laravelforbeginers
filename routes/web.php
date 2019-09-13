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

// Route::get('welcome', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();

//the Dasboard routes
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//the Posts routes
Route::resource('posts', 'PostsController');
