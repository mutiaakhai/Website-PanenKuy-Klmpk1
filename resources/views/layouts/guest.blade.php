<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>PanenKuy</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/guest.css' , 'resources/js/app.js'])
    </head>
    <body>
        
        <form action="{{ route('loginn') }}" method="POST">
            @csrf
    <div class="login-container">
        <img src="/assets/logo.png" >
        <h2>Login to PanenKuy</h2>
        @if (session()->has('loginError'))
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">{{ session('loginError') }}</span> Cek ulang kredensial anda
            </div>
        @endif

        
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                @error('email')
              <div class="invalid-feedback block text-sm/6 font-medium text-gray-900"> 
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <a href="/forgot-password" class="forgot-password">Forgot password?</a>

            <div class="checkbox-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ingat saya</label>
            </div>

            <button type="submit" class="btn-signin">Sign In</button>
        

        <a href="/registrasi" class="signup-link">Baru di PanenKuy? Daftar sekarang</a>
    </div>
</form>
</body>
</html>
