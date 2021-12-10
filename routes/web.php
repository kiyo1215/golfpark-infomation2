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
// Route::get('/dashboard', function () {
//     return view('golfpark.top');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/form', [GolfparkController::class, 'form'])->name('form');
Route::post('/form', [GolfparkController::class, 'add'])->name('add');
Route::get('/list', [GolfparkController::class, 'list'])->name('list');
Route::get('/list/info/{id}', [GolfparkController::class, 'showDetail'])->name('show');
Route::post('/list/delete', [GolfparkController::class, 'delete'])->name('delete');
Route::get('/info/edit/{id}', [GolfparkController::class, 'edit'])->name('edit');
Route::post('/info/update', [GolfparkController::class, 'update'])->name('update');
