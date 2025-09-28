<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.pages.index');
})->name('index');
Route::get('/layanan-kina-renovasi-jasa-perbaikan-rumah', function () {
    return view('app.pages.layanan');
})->name('layanan');
Route::get('/tentang-kina-renovasi-jasaperbaikan-rumah', function () {
    return view('app.pages.about-us');
})->name('tentang');
Route::get('/portofolio-kina-renovasi', function () {
    return view('app.pages.portofolio');
})->name('portofolio');
Route::get('/artikel', function () {
    return view('app.pages.artikel-list');
})->name('artikel');
// Route View per Artikel
Route::get('/artikel/renovasi-rumah/tips-renovasi-dapur-minimalis-hemat-budget', function () {
    return view('app.pages.artikel.tips-renovasi-rumah');
})->name('artikel-1');
Route::get('/artikel/cara-menghitung-estimasi-biaya-renovasi-rumah-yang-akurat', function () {
    return view('app.pages.artikel.cara-hitung-biaya-renovasi');
})->name('artikel-2');
Route::get('/artikel/tips-memilih-kontraktor-renovasi', function () {
    return view('app.pages.artikel.tips-memilih-kontraktor-renovasi');
})->name('artikel-3');
Route::get('/privacy-policy', function () {
    return view('app.pages.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-conditions', function () {
    return view('app.pages.terms-conditions');
})->name('terms-conditions');