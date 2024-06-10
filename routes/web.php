<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
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
    return view('/layouts.public.home');
})->name('home_public');

Route::get('/',[PublicController::class, 'index'])->name('home_public');

Route::get('/profile_public', [ProfileController::class, 'index'])->name('profile_public');

Route::get('/project_public', [ProjectController::class, 'index'])->name('project_public');

Route::get('/contact_public', [ContactController::class,'index'])->name('contact_public');


Route::get('/admin', function () {
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(FooterController::class)->prefix('footers')->group(function () {
        Route::get('', 'index')->name('footers');
        Route::get('create', 'create')->name('footers.create');
        Route::post('store', 'store')->name('footers.store');
        Route::get('show/{id}', 'show')->name('footers.show');
        Route::get('edit/{id}', 'edit')->name('footers.edit');
        Route::put('edit/{id}', 'update')->name('footers.update');
        Route::delete('destroy/{id}', 'destroy')->name('footers.destroy');
    });

    Route::resource('/admin/home', HomeController::class);
    Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get('admin/home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('home.create');
    Route::post('admin/home/create', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
    Route::get('admin/home/{home}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('home.edit');
    Route::put('admin/home/{home}/update', [App\Http\Controllers\HomeController::class, 'update'])->name('home.update');
    Route::delete('admin/home/{home}/delete', [App\Http\Controllers\HomeController::class, 'destroy'])->name('home.destroy');


    Route::get('/admin/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
    });

