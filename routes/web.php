<?php

// web.php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Ana sayfa: Giriş yap ya da kayıt ol seçeneği
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Login rotaları
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

// Register rotaları
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Dashboard (Giriş sonrası yönlendirme)
Route::get('dashboard', function () {
    return view('dashboard'); // `resources/views/dashboard.blade.php` dosyasını oluşturun
})->middleware('auth'); // Sadece giriş yapmış kullanıcılar erişebilir

// Logout işlemi
Route::get('logout', function () {
    Auth::logout(); // Kullanıcıyı oturumdan çıkar
    return redirect('/welcome');
})->name('logout');

Route::get('welcome', function () {
    return view('welcome'); // `resources/views/welcome.blade.php` dosyasını döndürür
})->name('welcome');

