<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/regituration', function () {
    return view('welcome');
})->name('welcome');

Route::get('/', function () {
    return view('home_contact');
});

Route::get('/api/users', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/api/users', [ContactUsController::class, 'store'])->name('contact-us.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
