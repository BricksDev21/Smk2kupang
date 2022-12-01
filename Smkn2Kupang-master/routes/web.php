<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('umum\dashboard');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\Umum\DashboardController::class, 'index'])->name('dashboard');
Route::get('/galeri', [App\Http\Controllers\Umum\GaleriController::class, 'index'])->name('galeri');

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('AdminGaleri', [App\Http\Controllers\Admin\GaleriController::class, 'index'])->name('galeri');
    Route::get('InputGaleri', [App\Http\Controllers\Admin\GaleriController::class, 'create'])->name('inputGaleri');
    Route::post('InsertGaleri', [App\Http\Controllers\Admin\GaleriController::class, 'store'])->name('insertGaleri');
    Route::delete('DeleteGaleri/{galeri}', [App\Http\Controllers\Admin\GaleriController::class, 'destroy'])->name('deleteGaleri');
    Route::get('EditGaleri/{galeri}', [App\Http\Controllers\Admin\GaleriController::class, 'edit'])->name('editGaleri');
    Route::put('UpdateGaleri/{galeri}/edit', [App\Http\Controllers\Admin\GaleriController::class, 'update'])->name('updateGaleri');

    Route::get('AdminGuru', [App\Http\Controllers\Admin\GuruController::class, 'index'])->name('guru');
    Route::get('InputGuru', [App\Http\Controllers\Admin\GuruController::class, 'create'])->name('inputGuru');
    Route::post('InsertGuru', [App\Http\Controllers\Admin\GuruController::class, 'store'])->name('insertGuru');
    Route::delete('DeleteGuru/{guru}', [App\Http\Controllers\Admin\GuruController::class, 'destroy'])->name('deleteGuru');
    Route::get('EditGuru/{guru}', [App\Http\Controllers\Admin\GuruController::class, 'edit'])->name('editGuru');
    Route::put('UpdateGuru/{guru}/edit', [App\Http\Controllers\Admin\GuruController::class, 'update'])->name('updateGuru');

    Route::get('StatusGuru', [App\Http\Controllers\Admin\StatusController::class, 'index'])->name('status');
    Route::get('InputStatus', [App\Http\Controllers\Admin\StatusController::class, 'create'])->name('inputStatus');
    Route::post('InsertStatus', [App\Http\Controllers\Admin\statusController::class, 'store'])->name('insertStatus');
    Route::delete('DeleteStatus/{status}', [App\Http\Controllers\Admin\statusController::class, 'destroy'])->name('deleteStatus');
    Route::get('EditStatus/{status}', [App\Http\Controllers\Admin\StatusController::class, 'edit'])->name('editStatus');
    Route::put('UpdateStatus/{status}/edit', [App\Http\Controllers\Admin\StatusController::class, 'update'])->name('updateStatus');
});

Route::group(['as'=>'siswa.','prefix' => 'siswa','namespace'=>'siswa','middleware'=>['auth','siswa']], function () {
    Route::get('dashboard', [App\Http\Controllers\Siswa\DashboardController::class, 'index'])->name('dashboard');
});
