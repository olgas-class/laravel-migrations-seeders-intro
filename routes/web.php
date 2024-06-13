<?php

use App\Http\Controllers\HouseController;
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
    return view('home');
})->name('home');

Route::get('/houses', [HouseController::class, 'index'])->name('houses');

Route::get('/houses/{house}', [HouseController::class, 'show'])->name('houses.show');
