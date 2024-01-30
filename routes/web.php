<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\jenisKegiatanController;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\ProductController;
use App\Models\jenisKegiatanModels;

Route::get('/', function () {
    return view('dashboard');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::controller(jenisKegiatanController::class)->prefix('jenisKegiatan')->group(function () {
    Route::get('', 'index')->name('jenisKegiatan/index');
    Route::get('create', 'create')->name('jenisKegiatan/create');
    Route::post('store', 'store')->name('jenisKegiatan.store');
    Route::get('jenisKegiatan/show/{id}', 'show')->name('jenisKegiatan/show');
    Route::put('jenisKegiatan/edit/{id}', 'edit')->name('jenisKegiatan/edit');
    Route::get('jenisKegiatan/edit/{id}', 'update')->name('jenisKegiatan/update');
    Route::delete('destroy/{id}', 'destroy')->name('jenisKegiatan/destroy');

});

Route::controller(kegiatanController::class)->prefix('kegiatan')->group(function (){
    Route::get('', 'index')->name('kegiatan.index');
    Route::get('create', 'create')->name('kegiatan/create');
    Route::post('store', 'store')->name('kegiatan/store');
    Route::get('kegiatan/show/{id}', 'show')->name('kegiatan/show');
    Route::get('kegiatan/edit/{id}', 'edit')->name('kegiatan/edit');
    Route::put('kegiatan/update/{id}', 'update')->name('kegiatan/update');
    Route::delete('destroy/{id}', 'destroy')->name('kegiatan/destroy');
});