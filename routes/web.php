<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VarmegyekController;
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

Route::get('/varmegyek', [VarmegyekController::class, 'index'])->name('varmegyek.index');
Route::get('/varmegyek/create', [VarmegyekController::class, 'create'])->name('varmegyek.create');
Route::post('/varmegyek/store', [VarmegyekController::class, 'store'])->name('varmegyek.store');
Route::get('/varmegyek/{varmegy}/edit', [VarmegyekController::class, 'edit'])->name('varmegyek.edit');
Route::put('/varmegyek/{varmegy}', [VarmegyekController::class, 'update'])->name('varmegyek.update');
Route::delete('/varmegyek/{varmegy}', [VarmegyekController::class, 'destroy'])->name('varmegyek.destroy');
Route::post('/varmegyek/filter', [VarmegyekController::class, 'filter'])->name('varmegyek.filter');

Route::get('/', function () {
    return view('welcome');
});
