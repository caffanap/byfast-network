<?php

use App\Http\Controllers\Admin\KategoriPaketController;
use App\KategoriPaket;
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

Route::get('/', 'HomePageController@index')->name('home');
Route::get('/about', 'AboutPageController@index')->name('about');
Route::get('/layanan', 'ServicePageController@index')->name('layanan');
Route::get('/cek-status-pemesanan', 'CheckOrderStatusPageController@index')->name('cekStatusPemesanan');
Route::get('/faq', 'FaqPageController@index');

Route::post('/subscriber/store', 'HomePageController@store');
Route::post('/newsletter', 'HomePageController@newsleter');

Route::redirect('login', 'auth/login');
Route::redirect('admin', 'auth/login');

Route::prefix('auth')->group(function () {
    Route::get('login', 'AuthController@index')->name('login');
    Route::post('login', 'AuthController@login');
    Route::get('logout', 'AuthController@logout');
});

Route::prefix('admin')->middleware('auth')->as('admin.')->group(function () {
    Route::redirect('dashboard', 'subscriber')->name('dashboard');

    // Route::get('dashboard', 'Admin\DashboardController@index');
    // Route::get('subscriber', 'Admin\SubscriberController@index');
    // Route::get('newsletter', 'Admin\NewsletterController@index');

    // kategori paket
    Route::resource('kategori-paket', 'Admin\KategoriPaketController');
    Route::resource('paket', 'Admin\PaketController');
    Route::resource('topping', 'Admin\ToppingController');
});
