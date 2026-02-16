<?php

use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('mahasiswa', MahasiswaController::class);

Route::resource('matakuliah', MataKuliahController::class);