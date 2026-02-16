<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/daftar-buku', function () {
    return view('daftar-buku');
});

