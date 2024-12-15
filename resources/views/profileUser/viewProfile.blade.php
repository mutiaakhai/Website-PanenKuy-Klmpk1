<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Kuy - User Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #E9F9E7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #D9FBD9;
            border-radius: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 32px;
            width: 450px;
            text-align: center;
            margin-top: 8%;
        }

        .container h1 {
            font-size: 24px;
            font-weight: 600;
            color: #1D6F42;
            margin-bottom: 16px;
        }

        .profile-icon {
            width: 80px;
            height: 80px;
            background-color: #A3E4A1;
            border-radius: 50%;
            margin: 0 auto 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            color: #1D6F42;
        }

        .form-group {
            margin-bottom: 16px;
            text-align: left;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #1D6F42;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #A3E4A1;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #1D6F42;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-actions button {
            background-color: #1D6F42;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        .form-actions button:hover {
            background-color: #145D35;
        }

        .dark-mode-toggle {
            display: flex;
            align-items: center;
        }

        .dark-mode-toggle label {
            color: #1D6F42;
            font-size: 14px;
            margin-right: 8px;
        }

        .dark-mode-toggle input {
            width: 20px;
            height: 20px;
        }

        .delete-button {
            background-color: #D9534F;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #C9302C;
        }

    .navbar {
    position: fixed; /* Tetap di atas meskipun halaman digulir */
    top: 0;
    left: 0;
    width: 100%; /* Lebar penuh */
    background-color: #D8FEA1; /* Warna hitam */
    padding: 13px 20px;
    z-index: 1000; /* Pastikan navbar berada di atas elemen lainnya */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Efek bayangan */
}

.navbar-logo img {
    height: 50px; /* Atur tinggi logo */
    width: auto; /* Pertahankan rasio logo */
    margin-left:88%;
}

    </style>
</head>
<body>
<nav class="navbar">
        <div class="navbar-logo">
            <img src="/assets/logo.png">
        </div>
    </nav>
    <div class="container">
        <div class="profile-icon">👤</div>
        <h1>Informasi Pengguna</h1>
        <form>
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" value="{{ $user->name ?? '' }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" value="{{ $user->email ?? '' }}" readonly>
            </div>
            <div class="form-group">
                <label for="phone">Nomor Telepon</label>
                <input type="tel" id="phone" value="{{ $profile->phone ?? 'No phone added' }}" readonly>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" value="{{ $profile->address ?? 'No address added' }}" readonly>
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" value="********" readonly>
            </div>
            <div class="form-actions">
                <div class="dark-mode-toggle">
                    <label for="dark-mode">Dark Mode</label>
                    <input type="checkbox" id="dark-mode">
                </div>
                <button type="button" onclick="location.href='{{ route('editpro', $user->id) }}'">Edit</button>
                <button type="button" class="delete-button" onclick="if(confirm('Are you sure you want to delete this account?')) { document.getElementById('delete-form').submit(); }">Delete</button>
            </div>
        </form>
        <form id="delete-form" action="{{ route('deleteUser', $user->id) }}" method="POST" style="display:none;">
            @csrf
        </form>
    </div>
</body>
</html>
