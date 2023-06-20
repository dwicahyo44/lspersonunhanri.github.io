<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/visi_misi', function () {
    return view('visi_misi', [
        "title" => "Visi & Misi"
    ]);
});

Route::get('/sejarah', function () {
    return view('sejarah', [
        "title" => "Sejarah"
    ]);
});

Route::get('/struktur_organisasi', function () {
    return view('struktur_organisasi', [
        "title" => "Struktur Organisasi"
    ]);
});

Route::get('/tentang_kami', function () {
    return view('tentang_kami', [
        "title" => "Tentang Kami"
    ]);
});

Route::get('/berita', function () {
    return view('berita_terkini', [
        "title" => "Berita Terkini"
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        "title" => "Galeri"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak_kami', [
        "title" => "Kontak Kami"
    ]);
});
