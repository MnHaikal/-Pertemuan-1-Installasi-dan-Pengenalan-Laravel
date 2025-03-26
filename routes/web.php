<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\Product; // Pastikan model dikenali dengan benar

// Route utama menampilkan homepage
Route::view('/', 'web.homepage')->name('home');

// Route untuk halaman daftar produk
Route::get('product', function () {
    $products = Product::all(); // Ambil semua produk dari database
    return view('web.product', compact('products'));
});return view('product');

// Route untuk halaman single product berdasarkan slug
Route::get('product/{slug}', function ($slug) {
    $product = Product::where('slug', $slug)->firstOrFail(); // Cari produk berdasarkan slug
    return view('web.product-detail', compact('product'));
});return view ('product.detail');

// Route untuk kategori
Route::view('categories', 'web.categories')->name('categories');

// Route untuk single kategori
Route::get('category/{slug}', function ($slug) {
    return view('web.category-detail', ['slug' => $slug]);
})->name('category.detail');

// Route untuk cart & checkout
Route::view('cart', 'web.cart')->name('cart');
Route::view('checkout', 'web.checkout')->name('checkout');

// Halaman utama (hanya bisa diakses jika login)
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

// Menggunakan file auth bawaan Laravel
require __DIR__.'/auth.php';
