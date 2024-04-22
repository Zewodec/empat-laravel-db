<?php

use App\Http\Controllers\PassengerController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/passengers', [PassengerController::class, 'index'])->name('passengers');
Route::get('/passengers/{id}', [PassengerController::class, 'show'])->name('passengers.show');

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations');
Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');

Route::get('/routes', [RouteController::class, 'index'])->name('routes');
Route::get('/routes/{id}', [RouteController::class, 'show'])->name('routes.show');

Route::get('/schedules', [ScheduleController::class, 'index'])->name('schedules');
Route::get('/schedules/{id}', [ScheduleController::class, 'show'])->name('schedules.show');

Route::get('/stations', [StationController::class, 'index'])->name('stations');
Route::get('/stations/{id}', [StationController::class, 'show'])->name('stations.show');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets');
Route::get('/tickets/{id}', [TicketController::class, 'show'])->name('tickets.show');

Route::get('/trains', [TrainController::class, 'index'])->name('trains');
Route::get('/trains/{id}', [TrainController::class, 'show'])->name('trains.show');
