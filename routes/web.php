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
Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
  Route::get('/dashboard','HomeController@index')->name('home');

	  Route::namespace('Auth')->group(function(){
	        
	    //Login Routes
	    Route::get('/login','LoginController@showLoginForm')->name('login');
	    Route::post('/login','LoginController@login');
	    Route::get('/register','RegisterController@showRegisterForm')->name('register');
	    Route::post('/register','RegisterController@register');
	    Route::get('/logout', 'LoginController@logout')->name('logout' );
	    Route::post('/logout','LoginController@logout')->name('logout');

	    //Forgot Password Routes
	    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
	    Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

	    //Reset Password Routes
	    Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
	    Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

	});
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Auth::routes();


 Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'home'
  ]);

 Route::post('/blog','HomeController@index');

