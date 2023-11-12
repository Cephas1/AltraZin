<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MagazinsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SuppliersController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/flux', function () {
        return view('_flux');
    })->name('flux');

    Route::get('/magazins', [MagazinsController::class, 'index'])->name('magazins');
    //Route::get('/magazin', [MagazinsController::class, 'show'])->name('magazin.show');
    Route::delete('magazin/{id}', [MagazinsController::class, 'destroy'])->name('magazin.destroy');
    Route::post('magazin/{id}', [MagazinsController::class, 'edit'])->name('magazin.edit');

    Route::get('/services', function () {
        return view('_services');
    })->name('services');
    Route::delete('service/{id}', [ServicesController::class, 'destroy'])->name('service.destroy');
    Route::post('service/{id}', [ServicesController::class, 'edit'])->name('service.edit');

    Route::get('/suppliers', function () {
        return view('_suppliers');
    })->name('fournisseurs');
    Route::delete('supplier/{id}', [SuppliersController::class, 'destroy'])->name('supplier.destroy');
    Route::post('supplier/{id}', [SuppliersController::class, 'edit'])->name('supplier.edit');

    Route::get('/params', function () {
        return view('_parametres');
    })->name('parametres');

});
