<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', function () {
    $mahasiswa = [
        'nama' => 'Razan Muhammad Al-azzam',
        'nim' => '2023000001',
        'prodi' => 'Sistem Informasi',
        'email' => 'razan@example.com',
        'kampus' => 'UNPAM',
        'status' => 'Aktif'
    ];

    return view('page.profile', compact('mahasiswa'));
});

Route::get('/about', function () {
    return view('page.about');
});