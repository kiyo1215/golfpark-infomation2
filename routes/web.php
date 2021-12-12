<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;;
use App\Http\Controllers\GolfparkController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/form', [GolfparkController::class, 'form'])->middleware(['auth'])->name('form');
Route::post('/form', [GolfparkController::class, 'add'])->middleware(['auth'])->name('add');
Route::get('/list', [GolfparkController::class, 'list'])->middleware(['auth'])->name('list');
Route::get('/list/info/{id}', [GolfparkController::class, 'showDetail'])->middleware(['auth'])->name('show');
Route::post('/list/delete', [GolfparkController::class, 'delete'])->middleware(['auth'])->name('delete');
Route::get('/info/edit/{id}', [GolfparkController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::post('/info/update', [GolfparkController::class, 'update'])->middleware(['auth'])->name('update');
