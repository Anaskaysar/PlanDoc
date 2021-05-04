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
    return view('welcome');
});

Route::get('/userprofile', function () {
    return view('User.profile');
});

//Test Routes For Design
Route::get('/home','HomeController@home')->name('home')->middleware('auth');



//Test Routes For Design Ends


Auth::routes(['register' => false]);
Route::get('/dashboard','HomeController@home')->name('dashboard')->middleware('auth');
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/users/change-password','UserController@passwordChangeForm')->name('users.password.change')->middleware('auth');
Route::post('/users/change-password','UserController@passwordChange')->name('users.password.change.store')->middleware('auth');

//admin password reset routes
Route::prefix('admin')->group(function() {
    Route::get('/','AdminController@home')->name('admin.home')->middleware('auth:admin');
    Route::get('/profile',function(){
        return view('Admin.profile');
    })->name('admin.profile')->middleware('auth:admin');
    Route::post('/logout', 'AdminController@adminLogout')->name('admin.logout');
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});


//User 



//Manager
