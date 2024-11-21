<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Pengguna - Panen Kuy</title>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/setting.css')
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <img src="/public/assets/logo.png" alt="Logo Panen Kuy" class="logo"> -->
            <!-- <h1>Panen Kuy</h1> -->
        </div>
        <div class="profile-card">
            <div class="avatar">
                <img src="/assets/logo.png" alt="Avatar">
            </div>
            <h2>Informasi Pengguna</h2>
            <form class="user-form">
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" placeholder="Value">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Value">
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Telepon</label>
                    <input type="tel" id="phone" placeholder="Value">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" placeholder="Value">
                </div>
                <div class="form-group">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" placeholder="Value">
                </div>
                <div class="toggle-darkmode">
                    <label for="darkmode">Dark Mode</label>
                    <input type="checkbox" id="darkmode">
                </div>
                <button type="submit" class="btn-save">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>
