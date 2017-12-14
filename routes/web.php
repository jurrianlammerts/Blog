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

Auth::routes();

Route::group(['middleware' => ['web']], function () {
    // Blog
    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
        // Regular expressions: any character (\w), number character(\d), '-' & '_'
        ->where('slug', '[\w\d\-\_]+');

    Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
    
    // Pages
    Route::get('about', 'PagesController@getAbout');
    Route::get('contact', 'PagesController@getContact');
    Route::get('/', 'PagesController@getIndex');
    Route::resource('posts', 'PostController');
    Route::get('/home', 'Homecontroller@index');
});

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
