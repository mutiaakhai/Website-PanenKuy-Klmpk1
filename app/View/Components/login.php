<?php
use Illuminate\Support\Facades\Auth;


Route::post('/login', function (Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Login berhasil
        $request->session()->regenerate();
        return redirect()->intended('dashboard'); // ganti 'dashboard' dengan halaman tujuan setelah login
    }

    // Login gagal
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
});
