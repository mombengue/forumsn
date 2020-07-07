<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes(['verify' => true]);

/* Auth */
Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/', 'Auth\LoginController@login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('/password/confirm', 'Auth\ConfirmPasswordController@confirm');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

/* Accueil */
Route::get('/home', 'HomeController@index')->name('home');

/* Profil */
Route::get('/profiles', 'ProfileController@index')->name('profiles.index');
Route::get('/profiles/{id}', 'ProfileController@show')->name('profiles.show');
// Route::get('/profiles/{user}/edit', 'ProfileController@edit')->name('profiles.edit');
// Route::patch('/profiles/{user}/edit', 'ProfileController@edit')->name('profiles.update');
// Route::delete('/profiles/{user}', 'ProfileController@edit')->name('profiles.destroy');

/* Posts */
// Route::get('/post', 'PostController@index')->name('post.index');
// Route::get('/post/create', 'PostController@create')->name('post.create');
// Route::get('/post/{user}/{slug}', 'PostController@edit')->name('post.edit');
// Route::get('/post/{user}/{slug}', 'PostController@show')->name('post.show');
// Route::post('/post', 'PostController@store')->name('post.store');
// Route::put('/post/{user}/{slug}', 'PostController@update')->name('post.update');
// Route::delete('/post/{user}/{slug}', 'PostController@destroy')->name('post.destroy');


