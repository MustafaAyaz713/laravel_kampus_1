<?php

namespace App\Http\Controllers;

use App\Models\User; // Kullanıcı modelini ekleyin
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Login formunu göster
    public function showLoginForm()
    {
        return view('login');
    }

    // Login işlemi
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('dashboard'); // Başarılı giriş sonrası yönlendirme
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Register formunu göster
    public function showRegisterForm()
    {
        return view('register'); // register.blade.php dosyasını döndür
    }

    // Register işlemi
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Yeni kullanıcı oluştur
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Otomatik giriş ve yönlendirme
        Auth::attempt($request->only('email', 'password'));
        return redirect()->intended('dashboard');
    }
}
