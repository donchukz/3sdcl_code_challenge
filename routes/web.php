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
    return view('welcome');
});

Route::prefix('auth')->group(function (){
    Route::get('login', function () {
        return view('auth.login');
    })->name('auth.login');
    Route::post('login', function () {
        return redirect()->route('home.dashboard');
    })->name('auth.login');
});

Route::prefix('home')->group(function (){
    Route::get('dashboard', function () {
        return view('home.dashboard');
    })->name('home.dashboard');
});
