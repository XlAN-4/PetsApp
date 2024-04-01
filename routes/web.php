<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {

    if(Auth::user()->role == 'Admin') {
        return view ('dashboard-admin');
    }
    elseif(Auth::user()->role == 'Custom') {
        return view('dashboard-Custom');
    }
    else {
        return '<h1> Not Allowed! </h1>';
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Resources
Route::resources([
    'users' => UserController::class,
    'pets' => PetController::class,
    'adoptions' => AdoptionController::class
]);

//customer
route::get('/mydata', [UserController::Class, 'mydata']);
route::get('/myadoptions', [UserController::Class, 'myadoption']);
});



require __DIR__.'/auth.php';
