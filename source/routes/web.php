<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Frontend;

use App\Http\Controllers\Authcontroller;

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



/********for fronend********/


/********for fronend********/

/*for logout*/
Route::get('/logout', [Authcontroller::class, 'logout'])->name('logout');
/*for logout*/

Route::group(['middleware'=>'UnknownUser'],function(){
    Route::get('/adminlogin', [Authcontroller::class, 'adminlogin'])->name('adminlogin');
    Route::post('/adminlogin', [Authcontroller::class, 'adminloginvarify'])->name('signin.varify');
});


/* superadmin group */
Route::group(['middleware'=>'isSuperadmin'],function(){
    Route::prefix('superadmin')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'superadmin'])->name('superadmin.dashboard');
        Route::group(['controller' => Authcontroller::class], function(){
            Route::get('/profile', 'profile')->name('superadmin.profile');
            Route::post('/profile_update/{id}','profile_update')->name('superadmin.profile_update');
        });
        
        
        //Route::resource('phoneext', PhoneExtController::class,['as'=>'superadmin']);
        Route::group(['controller' => CompanyController::class], function(){
            Route::get('/company', 'index')->name('superadmin.company.index');
            Route::get('/company/create','create')->name('superadmin.company.create');
            Route::post('/company','store')->name('superadmin.company.store');
            Route::get('/company/edit','edit')->name('superadmin.company.edit');
            Route::post('/company/edit/{id}','update')->name('superadmin.company.update');

            Route::resource('service',ServiceController::class,['as'=>'superadmin']);
        });
        /*Route::group(['controller' => HomeSection1Controller::class], function(){
            Route::get('/indexsec1', 'index')->name('superadmin.homesec1.index');
            Route::get('/sec1','create')->name('superadmin.homesec1.create');
            Route::post('/sec1','store')->name('superadmin.homesec1.store');
            Route::get('/editsec1','edit')->name('superadmin.homesec1.edit');
            Route::post('/updatesec1/{id}','update')->name('superadmin.homesec1.update');
        });*/
        
    });
});
