<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\MyEventController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Auth::routes(['verify' => true]);

// Participant Login
Route::prefix('participant')->name('participant.')->group(function () {
    Route::get('login', [LoginController::class, 'showParticipantLoginForm'])->name('login');
    Route::post('login/auth', [LoginController::class, 'participantLogin'])->name('login-auth');
    Route::get('', ParticipantController::class)->name('home');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('event')->name('event.')->group(function() {
	Route::get('ongoing', [EventController::class, 'ongoing'])->name('ongoing');
	Route::get('upcoming', [EventController::class, 'upcoming'])->name('upcoming');
	Route::get('preview/{event}', [EventController::class, 'preview'])->name('preview');
    Route::get('finish', [EventController::class, 'finish'])->name('finish');
    Route::get('create', [EventController::class, 'create'])->name('create');
    Route::post('store', [EventController::class, 'store'])->name('store');
    Route::get('{id}', [EventController::class, 'show'])->name('detail');
    Route::get('edit/{id}', [EventController::class, 'edit'])->name('edit');
    Route::delete('delete/{id}', [EventController::class, 'destroy'])->name('delete');
    Route::match(['get', 'put'], 'update/{id}', [EventController::class, 'update'])->name('update');
});

Route::resource('/', DashboardController::class);
Route::resource('registration', ParticipantController::class);
Route::post('/registration/{event}', [ParticipantController::class, 'store'])->name('registration.custom.store');
Route::resource('myevent', MyEventController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
