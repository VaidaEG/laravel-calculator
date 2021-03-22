<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PostCalculatorController;


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

Route::get('calculator/{action}/{number1}/{number2}', [CalculatorController::class, 'index']);
Route::get('calc', [PostCalculatorController::class, 'show'])->name('show-calc');
Route::post('calc', [PostCalculatorController::class, 'calc'])->name('do-math');
