<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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
// Route::get('/siswas', [SiswaController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/siswas/create', [SiswaController::class, 'create'])->name('siswas.create');

Route::post('/siswas', [SiswaController::class, 'store'])->name('siswas.store');

Route::get('/siswas', [SiswaController::class, 'index'])->name('siswas.index');
 
Route::get('/siswas/{id}/edit', [SiswaController::class, 'edit'])->name('siswas.edit');

Route::put('/siswas/{id}', [SiswaController::class, 'update'])->name('siswas.update');

Route::delete('/siswas/{id}', [SiswaController::class, 'destroy'])->name('siswas.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
