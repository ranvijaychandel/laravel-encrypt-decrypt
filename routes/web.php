<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncryptionDecryptionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/encrypt-form', [EncryptionDecryptionController::class, 'encryptForm']);
Route::get('/decrypt-form', [EncryptionDecryptionController::class, 'decryptForm']);
Route::post('/encrypt', [EncryptionDecryptionController::class, 'encryptData'])->name('encrypt');
Route::post('/decrypt', [EncryptionDecryptionController::class, 'decryptData'])->name('decrypt');;
Route::get('/decrypt-encrypt-both', [EncryptionDecryptionController::class, 'encryptDecryptBoth']);


require __DIR__.'/auth.php';
