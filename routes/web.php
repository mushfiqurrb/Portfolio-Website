<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@index')->name('home');
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'PagesController@dashboard')->name('admin.dashboard');
    Route::get('/main', 'MainPagesController@index')->name('admin.main');
    Route::put('/main', 'MainPagesController@update')->name('admin.main.update');
    Route::get('/portfolios/create', 'PortfolioPagesController@create')->name('admin.portfolios.create');
    Route::put('/portfolios/create', 'PortfolioPagesController@store')->name('admin.portfolios.store');
    Route::get('/portfolios/list', 'PortfolioPagesController@list')->name('admin.portfolios.list');
    Route::get('/portfolios/edit/{id}', 'PortfolioPagesController@edit')->name('admin.portfolios.edit');
    Route::post('/portfolios/update/{id}', 'PortfolioPagesController@update')->name('admin.portfolios.update');
    Route::delete('/portfolios/destroy/{id}', 'PortfolioPagesController@destroy')->name('admin.portfolios.destroy');
    Route::get('/abouts/create', 'AboutPagesController@create')->name('admin.abouts.create');
    Route::put('/abouts/create', 'AboutPagesController@store')->name('admin.abouts.store');
    Route::get('/abouts/list', 'AboutPagesController@list')->name('admin.abouts.list');
    Route::get('/abouts/edit/{id}', 'AboutPagesController@edit')->name('admin.abouts.edit');
    Route::post('/abouts/update/{id}', 'AboutPagesController@update')->name('admin.abouts.update');
    Route::delete('/abouts/destroy/{id}', 'AboutPagesController@destroy')->name('admin.abouts.destroy');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
