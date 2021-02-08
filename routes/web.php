<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/projets', [SiteController::class, 'projects'])->name('projects');

Route::get('/download', [SiteController::class, 'download'])->name('download');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact-form');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
