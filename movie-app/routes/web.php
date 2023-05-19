<?php

use App\Http\Controllers\GenresController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RivewController;
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
    return view('index');
});

Route::get('/movies',[MovieController::class, 'index'] );   

Route::get('/gendre',[GenresController::class, 'index'] );

Route::get('/rivew',[RivewController::class, 'index']);

Route::get('/user', function () {
    return view('user/index');
});

