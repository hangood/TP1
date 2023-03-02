<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/',[PagesController::class, 'home'])->name('home');
Route::get('/contact',[PagesController::class, 'contact'])->name('home.contact');
Route::get('/about',[PagesController::class, 'about'])->name('home.about');
Route::post('/thankyou',[PagesController::class, 'thankyou'])->name('home.thankyou');

Route::resource('contacts', ContactController::class );
