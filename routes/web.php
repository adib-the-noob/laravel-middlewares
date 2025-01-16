<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
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
});



Route::get('report', [ReportController::class,'show']);

// Route::middleware(['under-construction'])->group(function () {
// });


Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('role:guest');

Route::get('/profile', [ProfileController::class,'show']);

Route::get('stock', function () {
    return view('stock');
});