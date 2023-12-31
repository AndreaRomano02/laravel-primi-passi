<?php

use Illuminate\Support\Composer;
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

Route::get('/', function () {
  $name = 'Andrea';
  return view('home', compact('name'));
})->name('home');

Route::get('/test.blade.php', function () {
  return view('test');
})->name('test1');

Route::get('/test2.blade.php', function () {
  return view('test2');
})->name('test2');
