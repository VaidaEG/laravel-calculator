<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PostCalculatorController;
use App\Http\Controllers\AccountController;


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

Route::group(['prefix' => 'account'], function(){
    Route::get('', [AccountController::class, 'index'])->name('account.index');
    Route::get('create', [AccountController::class, 'create'])->name('account.create'); // Rodo tuscia nauja forma
    Route::post('store', [AccountController::class, 'store'])->name('account.store'); // Issaugo nauja account
    Route::get('edit/{account}', [AccountController::class, 'edit'])->name('account.edit'); // Rodo uzpildyta forma
    Route::post('update/{account}', [AccountController::class, 'update'])->name('account.update'); // Isaugo konkretu redaguota account
    Route::get('add/{account}', [AccountController::class, 'add'])->name('account.add'); // Rodo pridejimo laukeli
    Route::post('add-to-account/{account}', [AccountController::class, 'addToAccount'])->name('account.add_to_account'); // Prideda ir issaugo
    Route::post('delete/{account}', [AccountController::class, 'destroy'])->name('account.destroy');
    Route::get('show/{account}', [AccountController::class, 'show'])->name('account.show');
});