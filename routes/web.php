<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
})->name('login'); */



    Route::get('/', function () {
        /* return User::all(); */
        return view('welcome');
    });

    Route::get('/login', function () {
        return redirect('/');
    })->name('login');



    /* Route::get('/users', function () {
        return view('users.index');
    })->name('users.index'); */

    Route::get('users/', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('users.index');
    Route::get('users/{id}/', [UserController::class, 'show'])->middleware(['auth', 'verified'])->name('users.detailUser');
    Route::post('users/', [UserController::class, 'store'])->middleware(['auth', 'verified'])->name('users.store');
    Route::put('users/{id}/', [UserController::class, 'update'])->middleware(['auth', 'verified'])->name('users.update');
    Route::delete('users/{id}/', [UserController::class, 'destroy'])->middleware(['auth', 'verified'])->name('users.delete');

    Route::get('clients/', [ClientController::class, 'index'])->middleware(['auth', 'verified'])->name('clients.index');
    Route::get('clients/{id}/', [ClientController::class, 'show'])->middleware(['auth', 'verified'])->name('clients.detailClient');
    Route::post('clients/', [ClientController::class, 'store'])->middleware(['auth', 'verified'])->name('clients.store');
    Route::put('clients/{id}/', [ClientController::class, 'update'])->middleware(['auth', 'verified'])->name('clients.update');
    Route::delete('clients/{id}/', [ClientController::class, 'destroy'])->middleware(['auth', 'verified'])->name('clients.delete');

    /* Route::get('/users/detail-user', function () {
        return view('users.detailUser');
    })->middleware(['auth', 'verified'])->name('users.detailUser'); */

    Route::get('/activities', function () {
        return view('categories.activities');
    })->middleware(['auth', 'verified'])->name('categories.activities');

    Route::get('/tours', function () {
        return view('categories.tours');
    })->middleware(['auth', 'verified'])->name('categories.tours');

    Route::get('/private-tours', function () {
        return view('categories.privatesTours');
    })->middleware(['auth', 'verified'])->name('categories.privasteTours');

    /* Route::get('/clients', function () {
        return view('clients.index');
    })->name('clients.index');
    Route::get('/clients/detail-client', function () {
        return view('clients.detailClient');
    })->name('clients.detailClient'); */

    Route::get('/services', function () {
        return view('services.index');
    })->middleware(['auth', 'verified'])->name('services.index');

    Route::get('/services/detail-service', function () {
        return view('services.detailService');
    })->middleware(['auth', 'verified'])->name('services.detailService');

    Route::get('/reservations', function () {
        return view('reservations.index');
    })->middleware(['auth', 'verified'])->name('reservations.index');

    Route::get('/reservations/detail-reservation', function () {
        return view('reservations.detailReservation');
    })->middleware(['auth', 'verified'])->name('reservations.detailReservation');

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->middleware(['auth', 'verified'])->name('dashboard.index');

    Route::get('/reports', function () {
        return view('reports.index');
    })->middleware(['auth', 'verified'])->name('reports.index');

    Route::get('/reports/detail-report', function () {
        return view('reports.detailReport');
    })->middleware(['auth', 'verified'])->name('reports.detailReport');

