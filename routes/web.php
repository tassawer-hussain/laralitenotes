<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Registers routes needed for the application. If we create it manually
// Route::get('/notes', ); // all notes for the logged-in user
// Route::get('/notes/{note}', ); // note detail view
// Route::get('/notes/create', ); // display a aform to create note
// Route::post('/notes', ); // to save this note
// Routes to edit
// Routes to update
// Routes to destroy.

// We can manage all above routs just one Resoure route.
// Route::resource('/notes', NoteController::class)->middleware(['auth']);
Route::resource('/notes', NoteController::class);

require __DIR__.'/auth.php';
