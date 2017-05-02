<?php

/*
|--------------------------------------------------------------------------
| Web Application Routes
|--------------------------------------------------------------------------
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
*/
Route::get('/', 'HomeController@home');

Route::get('dashboard', 'DashboardController@index')->middleware('auth');
Route::resource('showers', 'ShowerController');

/**
 * //Auth::routes();
 * can be found at the following location...
 * /vendor/laravel/framework/src/illuminate/routing/Router.php
 * // Authentication Routes...
 */
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


