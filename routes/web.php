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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::post('gallery/search/', [App\Http\Controllers\HomeController::class, 'search']);
Auth::routes();

Route::get('home', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
#category
Route::get('dashboard/category/insert/page', [App\Http\Controllers\CategoryController::class, 'insert_page']);
Route::post('dashboard/category/insert/function', [App\Http\Controllers\CategoryController::class, 'insert_function']);
Route::get('dashboard/category/loop', [App\Http\Controllers\CategoryController::class, 'loop']);
Route::get('dashboard/category/edit/page/{id}', [App\Http\Controllers\CategoryController::class, 'update_page']);
Route::post('dashboard/category/edit/function/{id}', [App\Http\Controllers\CategoryController::class, 'update_function']);
Route::get('dashboard/category/remove/{id}', [App\Http\Controllers\CategoryController::class, 'remove_function']);
#slider
Route::get('dashboard/slider/insert/page', [App\Http\Controllers\SliderController::class, 'insert_page']);
Route::post('dashboard/slider/insert/function', [App\Http\Controllers\SliderController::class, 'insert_function']);
Route::get('dashboard/slider/loop', [App\Http\Controllers\SliderController::class, 'loop']);
Route::get('dashboard/slider/edit/page/{id}', [App\Http\Controllers\SliderController::class, 'update_page']);
Route::post('dashboard/slider/edit/function/{id}', [App\Http\Controllers\SliderController::class, 'update_function']);
Route::get('dashboard/slider/remove/{id}', [App\Http\Controllers\SliderController::class, 'remove_function']);
#about
Route::get('dashboard/about/update/page', [App\Http\Controllers\AboutController::class, 'update_page']);
Route::post('dashboard/about/update/function', [App\Http\Controllers\AboutController::class, 'update_function']);
#settings
Route::get('dashboard/settings/update/page', [App\Http\Controllers\SettingsController::class, 'update_page']);
Route::post('dashboard/settings/update/function', [App\Http\Controllers\SettingsController::class, 'update_function']);
#customer
Route::get('dashboard/customer/insert/page', [App\Http\Controllers\CustomerController::class, 'insert_page']);
Route::post('dashboard/customer/insert/function', [App\Http\Controllers\CustomerController::class, 'insert_function']);
Route::get('dashboard/customer/loop', [App\Http\Controllers\CustomerController::class, 'loop']);
Route::get('dashboard/customer/edit/page/{id}', [App\Http\Controllers\CustomerController::class, 'update_page']);
Route::post('dashboard/customer/edit/function/{id}', [App\Http\Controllers\CustomerController::class, 'update_function']);
Route::get('dashboard/customer/remove/{id}', [App\Http\Controllers\CustomerController::class, 'remove_function']);
#gallery
Route::get('dashboard/gallery/insert/page', [App\Http\Controllers\GalleryController::class, 'insert_page']);
Route::post('dashboard/gallery/insert/function', [App\Http\Controllers\GalleryController::class, 'insert_function']);
Route::get('dashboard/gallery/loop', [App\Http\Controllers\GalleryController::class, 'loop']);
Route::get('dashboard/gallery/edit/page/{id}', [App\Http\Controllers\GalleryController::class, 'update_page']);
Route::post('dashboard/gallery/edit/function/{id}', [App\Http\Controllers\GalleryController::class, 'update_function']);
Route::get('dashboard/gallery/remove/{id}', [App\Http\Controllers\GalleryController::class, 'remove_function']);