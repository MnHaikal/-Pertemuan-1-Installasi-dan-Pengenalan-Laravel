<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/home', function () {
    return "
    <div style='text-align: center;'>
        <h2>Selamat datang di TikTok Shop Clone</h2>
        <br><br>
        <a href='/kategori'>Kategori Produk</a>
        <br><br>
        <a href='/produk-terlaris'>Produk Terlaris</a>
        <br><br>
        <a href='/promo-flash-sale'>Promo Flash Sale</a>
        <br><br>
        <a href='/keranjang'>Keranjang Saya</a>
        <br><br>
        <a href='/checkout'>Lanjut ke Pembayaran</a>
    </div>
    ";
});

// Halaman kategori
Route::get('/kategori', function () {
    return 'Ini adalah halaman kategori produk di TikTok Shop';
});

// Halaman produk terlaris
Route::get('/produk-terlaris', function () {
    return 'Ini adalah halaman produk terlaris di TikTok Shop';
});

// Halaman promo flash sale
Route::get('/promo-flash-sale', function () {
    return 'Ini adalah halaman promo flash sale TikTok Shop';
});

// Halaman keranjang belanja
Route::get('/keranjang', function () {
    return 'Ini adalah halaman keranjang saya di TikTok Shop';
});

// Halaman checkout (memerlukan login)
Route::middleware(['auth'])->group(function () {
    Route::get('/checkout', function () {
        return 'Ini adalah halaman pembayaran TikTok Shop';
    });
});

// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';