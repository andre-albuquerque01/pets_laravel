<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\ItensController;
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

Route::get('/', [ItensController::class, 'index'])->name('index');

Route::get('cadastro', function () {
    return view('cadastrar');
})->middleware(['auth', 'verified'])->name('cadastro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('registerIten', [InsertController::class, 'insertIten'])->name('registerIten');

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('/detail/{id}', [ItensController::class, 'detail'])->name('detail');

require __DIR__ . '/auth.php';
