<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanenKuy Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    @vite('resources/css/register.css')
</head>
<body>

    <!-- <div class="register-container">
        <img src="path/to/avatar-icon.png" alt="User Icon">
        <h2>Register to PanenKuy</h2>

        <form action="/register" method="POST">
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi" required>
            </div>

            <button type="submit" class="btn-register">Register</button>
        </form>

        <a href="/login" class="login-link">Sudah terdaftar? Masuk</a>
    </div> -->
    <form action="{{ route('registrasi') }}" method="post">
        @csrf
    <div class="register-container">
    <!-- <img src="/public/assets/" alt="User Icon"> Icon at the top -->
    <h2>Register</h2>
    <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="phone">Nomor Telepon</label>
        <input type="integer" class="form-control" id="phone" placeholder="Nomor Telepon">
    </div>
    <div class="form-group">
        <label for="address">Alamat</label>
        <input type="text" class="form-control" id="address" placeholder="Alamat">
    </div>
    <div class="form-group">
        <label for="password">Kata Sandi</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
    </div>
    <button class="btn-register">Register</button>
    <a href="Login" class="login-link">Sudah terdaftar? Masuk</a>
</div>

    </form>
</body>
</html>