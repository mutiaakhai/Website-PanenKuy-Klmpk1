<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen Kuy</title>
    @vite('resources/css/user.css')
</head>

<body>
<nav class="navbar">
<div class="navbar-logo">
    <a href="/home">
        <img src="/assets/logo.png" alt="Logo">
    </a>
</div>
    </nav>

    <div class="container">
    <div class="icon">👤</div>
    <a href="/profile/{id}">
        <button>Informasi Pengguna</button>
    </a>
    <a href="/mulai-berjualan">
        <button>Mulai Berjualan</button>
    </a>
    <a href="/katalog">
        <button>Katalog</button>
    </a>
    <a href="/Login">
        <button>Log Out</button>
    </a>
</div>

</body>
</html>
