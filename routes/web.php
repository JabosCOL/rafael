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
    return view('layouts.plantilla');
});

Route::get('Berlín', function () {
    return view('Berlín');
});
Route::get('Colonia', function () {
    return view('Colonia');
});
Route::get('Hamburgo', function () {
    return view('Hamburgo');
});
Route::get('Múnich', function () {
    return view('Múnich');
});
