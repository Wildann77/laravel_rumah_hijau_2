<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman utama e-commerce
Route::get('/shop', function () {
    return "Selamat datang di toko online kami!";
});

// Route untuk daftar produk
Route::get('/products', function () {
    return "Daftar Produk";
});

// Route untuk menampilkan detail produk berdasarkan ID
Route::get('/products/{id}', function ($id) {
    return "Detail Produk dengan ID: " . $id;
});

// Route untuk menambahkan produk ke keranjang belanja
Route::post('/cart/add', function () {
    return "Produk ditambahkan ke keranjang!";
});

// Route untuk melihat isi keranjang belanja
Route::get('/cart', function () {
    return "Isi Keranjang Belanja";
});

// Route untuk melakukan checkout
Route::get('/checkout', function () {
    return "Halaman Checkout";
});



Route::get('/hello-world', function () {
    return "Hello World";
});

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

require __DIR__ . '/auth.php';
