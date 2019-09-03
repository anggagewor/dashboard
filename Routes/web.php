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

Route::prefix('dashboard')->group(function() {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');
    Route::get('/modules', 'DashboardController@modules')->name('dashboard.modules');
    Route::get('/modules/{name}', 'DashboardController@modulesDetails')->name('dashboard.modules.details');
});
