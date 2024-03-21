<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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


//normal one
/*
Route::get('/', function () {
    return view('home');
});
*/
Route::get('/', [ItemsController::class, 'index']);

Route::get('/items/create', [ItemsController::class, 'create'])->middleware(['auth', 'verified']);
Route::post('/items', [ItemsController::class, 'store'])->middleware(['auth', 'verified']);
Route::get('/items/{items}/edit', [ItemsController::class, 'edit'])->middleware(['auth', 'verified']);
Route::put('/items/{items}', [ItemsController::class, 'update'])->middleware(['auth', 'verified']);
Route::delete('/items/{items}/delete', [ItemsController::class, 'destroy'])->middleware(['auth', 'verified']);

//comment out below email to stop email verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
Route::resource('items', ItemsController::class)
    ->only(['create', 'store'])
    ->middleware(['auth', 'verified'])
    ;
*/
require __DIR__.'/auth.php';
