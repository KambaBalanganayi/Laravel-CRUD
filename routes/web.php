<?php

use App\Http\Controllers\EtudiantController;
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

Route::get('app',[EtudiantController::class, 'index'])->name('app.index');

Route::get('app/{etudiant}',[EtudiantController::class, 'show'])->name('app.show');

Route::get('app-create',[EtudiantController::class, 'create'])->name('app.create');

Route::post('app-create',[EtudiantController::class, 'store'])->name('app.store');

Route::get('app-edit/{etudiant}',[EtudiantController::class, 'edit'])->name('app.edit');

Route::put('app-edit/{etudiant}',[EtudiantController::class, 'update']);

Route::delete('app-edit/{etudiant}',[EtudiantController::class, 'destroy']);


