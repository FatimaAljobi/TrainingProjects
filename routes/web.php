<?php

use App\Http\Controllers\AddComplaintController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/complaints',[ComplaintController::class,'complaintt'])->name('complaints');

Route::resource('addcomplaints', 'AddComplaintController');
Route::get('/createcomplaints',[AddComplaintController::class,'create'])->name('createcomplaints');
Route::get('/addcomplaints',[AddComplaintController::class,'add'])->name('addcomplaints');

Route::get('/sent', function () {
    return view('sent');
})->name('sent');

require __DIR__.'/auth.php';
