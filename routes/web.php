<?php

use App\Http\Controllers\GroupEcomController;

use App\Http\Controllers\LoginCreatorController;
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
    return view('welcome');
});


Route::prefix('spp')->group(function () {
    Route::get('/', [GroupEcomController::class, 'index']);
    Route::get('/pallet/{id}', [GroupEcomController::class, 'details']);
    Route::get('/login-creator', [LoginCreatorController::class, 'index']);
    Route::post('/login-creator/test/', [LoginCreatorController::class, 'test'])->name('list.users');
    Route::get('/login-creator/{id}/edit', [LoginCreatorController::class, 'edit']);
    Route::put('/login-creator/{id}', [LoginCreatorController::class, 'update']);
});
