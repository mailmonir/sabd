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
})->name('welcome');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/profile', [
    'uses' => 'ProfileController@index',
    'as' => 'profile'
]);
Route::get('/dashboard', [
    'uses' => 'DashboardController@index',
    'as' => 'dashboard'
]);

// Route::get('/{user?}/login', [
//     'uses' => 'Admin\LoginController@showLoginForm',
//     'as' => 'login'
// ])->where('user', 'admin|auditor|');

// Route::post('/{user?}/login', [
//     'uses' => 'Admin\LoginController@login',
//     'as' => 'login'
// ])->where('user', 'admin|auditor|');




// Routes for admin
Route::prefix('admin')->group(function() {

    Route::get('/', [
        'uses' => 'HomeControllerAdmin@index',
        'as' => 'admin.home'
    ]);
    
    Route::get('/login', [
        'uses' => 'Admin\LoginController@showLoginForm',
        'as' => 'admin.login'
    ]);
    
    Route::post('/login', [
        'uses' => 'Admin\LoginController@login',
        'as' => 'admin.login'
    ]);
    
    Route::post('/password/email', [
        'uses' => 'Admin\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'admin.password.email'
    ]);
    
    Route::get('/password/reset', [
        'uses' => 'Admin\ForgotPasswordController@showLinkRequestForm',
        'as' => 'admin.password.request'
    ]);
    
    Route::post('/password/reset', [
        'uses' => 'Admin\ResetPasswordController@reset',
        'as' => 'admin.password.update'
    ]);
    
    Route::get('/password/reset/{token}', [
        'uses' => 'Admin\ResetPasswordController@showResetForm',
        'as' => 'admin.password.reset'
    ]);
    
    Route::post('/logout', [
        'uses' => 'Admin\LoginController@logout',
        'as' => 'admin.logout'
    ]);
});

// Routes for auditor
Route::prefix('auditor')->group(function() {

    Route::get('/', [
        'uses' => 'HomeControllerAuditor@index',
        'as' => 'auditor.home'
    ])->middleware('auditor.verified');
    
    Route::get('/login', [
        'uses' => 'Auditor\LoginController@showLoginForm',
        'as' => 'auditor.login'
    ]);
    
    Route::post('/login', [
        'uses' => 'Auditor\LoginController@login',
        'as' => 'auditor.login'
    ]);
    
    Route::post('/password/email', [
        'uses' => 'Auditor\ForgotPasswordController@sendResetLinkEmail',
        'as' => 'auditor.password.email'
    ]);
    
    Route::get('/password/reset', [
        'uses' => 'Auditor\ForgotPasswordController@showLinkRequestForm',
        'as' => 'auditor.password.request'
    ]);
    
    Route::post('/password/reset', [
        'uses' => 'Auditor\ResetPasswordController@reset',
        'as' => 'auditor.password.update'
    ]);
    
    Route::get('/password/reset/{token}', [
        'uses' => 'Auditor\ResetPasswordController@showResetForm',
        'as' => 'auditor.password.reset'
    ]);
    
    Route::post('/logout', [
        'uses' => 'Auditor\LoginController@logout',
        'as' => 'auditor.logout'
    ]);
    
    Route::get('/register', [
        'uses' => 'Auditor\RegisterController@showRegistrationForm',
        'as' => 'auditor.register'
    ]);

    Route::post('/register', [
        'uses' => 'Auditor\RegisterController@register',
        'as' => 'auditor.register'
    ]);

    Route::get('/email/resend', [
        'uses' => 'Auditor\VerificationController@resend',
        'as' => 'auditor.verification.resend'
    ]);

    Route::get('/email/verify', [
        'uses' => 'Auditor\VerificationController@show',
        'as' => 'auditor.verification.notice'
    ]);

    Route::get('/email/verify/{id}', [
        'uses' => 'Auditor\VerificationController@verify',
        'as' => 'auditor.verification.verify'
    ]);
});
