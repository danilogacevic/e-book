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
    // return view('welcome');

    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');

Route::get('admin/newsletter',function(){

	return view('backEnd.newsletter.create');
});
Route::post('admin/newsletter','NewsletterController@send');

Route::get('/admin',function (){

	return view('backlayout.app');
});

Route::group(['middleware'=>'admin'],function(){

	Route::resource('/admin/users','AdminUsersController');
	Route::resource('/admin/posts','AdminPostsController');
	Route::resource('/admin/photos','AdminMediasController');
	Route::resource('/admin/orders','OrdersController');
	
	});

// Route::get('/thankyou',function (){

// 	return view('home');
// });

Route::get('/makeOrder','OrdersController@makeOrder');

