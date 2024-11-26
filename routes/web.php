<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Abdul Rofiq']);
});

// TUGAS: Buat 2 rute baru

// 1. /blog -> 2 buah artikel, judul dan isi
Route::get('/blog', function () {
    return view('blog');
});

// 2. /contact -> email / social media
Route::get('/contact', function () {
    return view('contact', [
        'email' => 'rofiqabdul04@gmail.com',
        'instagram' => '@rofiq_abdul'
    ]);
});