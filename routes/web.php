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

Route::get('/', function () {
    return view('startpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/addBalance', function () {
    return view('addbalance');
})->middleware(['auth'])->name('dashboard');
Route::get('auth/google', [\App\Http\Controllers\googleauthcontroller::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [\App\Http\Controllers\googleauthcontroller::class, 'callbackGoogle']);
require __DIR__.'/auth.php';
