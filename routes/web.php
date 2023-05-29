<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\MyEventController;

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

Route::prefix('event')->name('event.')->group(function() {
	Route::get('ongoing', [EventController::class, 'ongoing'])->name('ongoing');
});
Route::prefix('event')->name('event.')->group(function() {
	Route::get('upcoming', [EventController::class, 'upcoming'])->name('upcoming');
});
Route::get('event/{id}', [EventController::class, 'show'])->name('event.detail');
Route::resource('/', EventController::class);
Route::resource('registration', ParticipantController::class);
Route::post('/registration/{event}', [ParticipantController::class, 'store'])->name('registration.custom.store');
Route::resource('myevent', MyEventController::class);
