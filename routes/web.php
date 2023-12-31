<?php

use App\Http\Controllers\MaterielController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('materiels', MaterielController::class);

    Route::get('home',[HomeController::class,'home'])->name('home');
    Route::get('apropos', [HomeController::class,'apropos'])->name('apropos');
    Route::get('contact', [HomeController::class,'contact'])->name('contact');
    Route::get('service', [HomeController::class,'service'])->name('service');

    


});

require __DIR__.'/auth.php';
