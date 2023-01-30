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
Route::get('/assets', [AssetController::class, 'index'])->name('assets.index');
Route::get('/assets/create', [AssetController::class, 'create'])->name('assets.create');
Route::post('/assets', [AssetController::class, 'store'])->name('assets.store');
Route::get('/assets/{asset}', [AssetController::class, 'show'])->name('assets.show');
Route::get('/assets/{asset}/edit', [AssetController::class, 'edit'])->name('assets.edit');
Route::put('/assets/{asset}', [AssetController::class, 'update'])->name('assets.update');
Route::delete('/assets/{asset}', [AssetController::class, 'destroy'])->name('assets.destroy');


Route::get('/', function () {
    return view('welcome');
});
