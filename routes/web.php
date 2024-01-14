<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

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
    return view('welcome');
});

Route::get('suchanski/310810/basic', [BasicController::class, 'index'])->name('basic.index');
Route::get('suchanski/310810/basic/{id}', [BasicController::class, 'show'])->name('basic.show');
Route::post('suchanski/310810/basic/{id}', [BasicController::class, 'update'])->name('basic.update');
Route::delete('suchanski/310810/basic/{id}', [BasicController::class, 'delete'])->name('basic.delete');
Route::post('suchanski/310810/basic/{id}', [BasicController::class, 'create'])->name('basic.create');

