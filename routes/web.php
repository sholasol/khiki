<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/services', [FrontController::class, 'services'])->name('front.services');
Route::get('/properties', [FrontController::class, 'properties'])->name('front.properties');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::post('/contact', [FrontController::class, 'store'])->name('contact.store');
Route::get('/property/{id}', [FrontController::class, 'show'])->name('front.property');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/properties', [AdminController::class, 'properties'])->name('admin.properties');
    Route::get('/createProperty', [AdminController::class, 'create'])->name('createProperty');  
    Route::get('/showProperty/{id}', [AdminController::class, 'show'])->name('show.property');  
    Route::post('/createProperty', [AdminController::class, 'store'])->name('store.property');
    Route::get('/editProperty/{id}', [AdminController::class, 'edit'])->name('edit.property');
    Route::put('/updateProperty/{id}', [AdminController::class, 'update'])->name('update.property');
    Route::delete('/deleteProperty/{id}', [AdminController::class, 'destroy'])->name('delete.property');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
