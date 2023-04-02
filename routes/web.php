<?php

use Illuminate\Support\Facades\Route;

Route::get('/mahasiswa','MahasiswaController@mahasiswa')->name('mahasiswa');
Route::get('/dosen','MahasiswaController@dosen')->name('dosen');
Route::get('/gallery','MahasiswaController@gallery')->name('gallery');
Route::get('/informasi/{prodi}/{jurusan}','MahasiswaController@info')->name('info');
