<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Artists\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('artists');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::controller(UserController::class)->prefix('users')->group(function () {
        Route::get('', 'index')->name('users');
        Route::get('create', 'create')->name('users.create');
        Route::post('store', 'store')->name('users.store');
        Route::get('show/{id}', 'show')->name('users.show');
        Route::get('edit/{id}', 'edit')->name('users.edit');
        Route::put('edit/{id}', 'update')->name('users.update');
        Route::delete('destroy/{id}', 'destroy')->name('users.destroy');
    });

    Route::controller(ProjectController::class)->prefix('projects')->group(function () {
        Route::get('', 'index')->name('projects');
        Route::get('create', 'create')->name('projects.create');
        Route::post('store', 'store')->name('projects.store');
        Route::get('show/{id}', 'show')->name('projects.show');
        Route::get('edit/{id}', 'edit')->name('projects.edit');
        Route::put('edit/{id}', 'update')->name('projects.update');
        Route::delete('destroy/{id}', 'destroy')->name('projects.destroy');
    });

    Route::controller(PartnerController::class)->prefix('partners')->group(function () {
        Route::get('', 'index')->name('partners');
        Route::get('create', 'create')->name('partners.create');
        Route::post('store', 'store')->name('partners.store');
        Route::get('show/{id}', 'show')->name('partners.show');
        Route::get('edit/{id}', 'edit')->name('partners.edit');
        Route::put('edit/{id}', 'update')->name('partners.update');
        Route::delete('destroy/{id}', 'destroy')->name('partners.destroy');
    });


    Route::controller(RequestController::class)->prefix('requsets')->group(function () {
        Route::get('', 'index')->name('requsets');
        Route::get('create', 'create')->name('reservations.create');
        Route::post('store', 'store')->name('reservations.store');
        Route::get('show/{id}', 'show')->name('reservations.show');
        Route::get('edit/{id}', 'edit')->name('reservations.edit');
        Route::put('edit/{id}', 'update')->name('reservations.update');
        Route::delete('destroy/{id}', 'destroy')->name('reservations.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});

Route::middleware(['auth', 'artist'])->group(function () {

    Route::controller(HomeController::class)->prefix('artists')->group(function () {
        Route::get('', 'index')->name('artists');
        Route::get('create', 'create')->name('artists.create');
        Route::post('store', 'store')->name('artists.store');
        Route::get('show/{id}', 'show')->name('artists.show');
        Route::put('edit/{id}', 'update')->name('artists.update');
        Route::delete('destroy/{id}', 'destroy')->name('artists.destroy');
    });
});
