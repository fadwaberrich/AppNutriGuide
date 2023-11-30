<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\nutritionnistecontroller;
use App\Http\Controllers\reservationcontroller;
use App\Http\Controllers\notificationcontroller;
use App\Http\Controllers\nutricontroller;

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
})->name('welcome');
Route::get('accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('/', function () {
    return view('principale');
});


Route::get('/theme', function () {
    return view('theme');
});


Route::get('navbar', function () {
    return view('navbar');
});

Route::get('apropos', function () {
    return view('apropos');
});

Route::get('nutritionniste', function () {
    return view('nutritionniste');
});

Route::get('liste-reserv', function () {
    return view('liste-reserv');
});

Route::get('contact', function () {
    return view('contact');
});

// Admin Routes
Route::middleware(['admin'])->group(function () {
    Route::get('/liste-admin', [admincontroller::class, 'getadmin'])->name('liste-admin');
    Route::get('/ajouter-admin', function () {
        return view('ajouter-admin');
    });
    route::get('modifier-admin/{id}', [admincontroller::class, 'getadminid']);
    route::get('suppadmin/{id}', [admincontroller::class, 'deleteadmin']);
    Route::post('/addadmin', [admincontroller::class, 'ajoutadmin']);
    Route::post('/updateadmin', [admincontroller::class, 'updateadmin']);
});

// Nutritionniste Routes
Route::get('/ajouter-nutritionniste', function () {
    return view('ajouter-nutritionniste');
});

Route::get('/liste-nutritionniste', [nutritionnistecontroller::class, 'getnutritionniste']);
route::get('modifier-nutritionniste/{id}', [nutritionnistecontroller::class, 'getnutritionnisteid']);
route::get('suppnutritionniste/{id}', [nutritionnistecontroller::class, 'deletenutritionniste']);
Route::post('/addnutritionniste', [nutritionnistecontroller::class, 'ajoutnutritionniste']);
Route::post('/updatenutritionniste', [nutritionnistecontroller::class, 'updatenutritionniste']);

// Other Routes
Route::get('/details{id}', [reservationcontroller::class, 'getviewrdv']);
Route::post('/addreservation', [reservationcontroller::class, 'ajoutreservation']);
Route::get('/nutritionniste', [nutricontroller::class, 'getnutritionniste']);
Route::get('/liste-reserv', [reservationcontroller::class, 'getreservation']);
Route::get('/accueil', [notificationcontroller::class, 'notif']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
