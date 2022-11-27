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

Route::get('users/', [UserController::class, 'index'])->name('users.index');
Route::get('users/{id}/', [UserController::class, 'show'])->name('users.detailUser');
Route::post('users/', [UserController::class, 'store'])->name('users.store');
Route::put('users/{id}/', [UserController::class, 'update'])->name('users.update');
Route::delete('users/{id}/', [UserController::class, 'delete'])->name('users.delete');

Route::get('clients/', [ClientController::class, 'index'])->name('clients.index');
Route::get('clients/{id}/', [ClientController::class, 'show'])->name('clients.detailClient');
Route::post('clients/', [ClientController::class, 'store'])->name('clients.store');
Route::put('clients/{id}/', [ClientController::class, 'update'])->name('clients.update');
Route::delete('clients/{id}/', [ClientController::class, 'delete'])->name('clients.delete');

Route::get('/users/detail-user', function () {
    return view('users.detailUser');
})->name('users.detailUser');

Route::get('/activities', function () {
    return view('categories.activities');
})->name('categories.activities');

Route::get('/tours', function () {
    return view('categories.tours');
})->name('categories.tours');

Route::get('/private-tours', function () {
    return view('categories.privatesTours');
})->name('categories.privasteTours');

/* Route::get('/clients', function () {
    return view('clients.index');
})->name('clients.index');
Route::get('/clients/detail-client', function () {
    return view('clients.detailClient');
})->name('clients.detailClient'); */

Route::get('/services', function () {
    return view('services.index');
})->name('services.index');

Route::get('/services/detail-service', function () {
    return view('services.detailService');
})->name('services.detailService');

Route::get('/reservations', function () {
    return view('reservations.index');
})->name('reservations.index');

Route::get('/reservations/detail-reservation', function () {
    return view('reservations.detailReservation');
})->name('reservations.detailReservation');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');

Route::get('/reports', function () {
    return view('reports.index');
})->name('reports.index');

Route::get('/reports/detail-report', function () {
    return view('reports.detailReport');
})->name('reports.detailReport');