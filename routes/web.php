<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;

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
Route::post('/contact', [ContactController::class, 'submitContact'])->name('contact-post');


Route::group(['prefix' => 'adminvoyager'], function () {
    Voyager::routes();
});
