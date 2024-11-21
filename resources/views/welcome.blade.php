<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanenKuy</title>
    <link rel="stylesheet" href="resources/css/welcome.css">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    @vite('resources/css/welcome.css')
</head>
<body>
    <style>
        .login-box {
            background-image: url('{{ asset('assets/lettuce.png') }}');
        }
    </style>
    
    <!-- Header Section -->
    <header>
        <div class="logo">Panen Kuy</div>
        <input type="text" placeholder="Search" class="search-bar">
        <ul class="navbar">
            <li><a href="/login">Home</a></li>
            <li><a href="/login">Catalog</a></li>
            <li><a href="/login">Category</a></li>
            <li><a href="/Login">Help</a></li>
            <li><a href="/Login" class="login-box" >Login</a></li>
            {{-- style="background-image: url('{{ asset('assets/lettuce.png') }}" --}}
        </ul>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1></h1>
        <p></p>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="feature-card anti-ribet">
            <h3>Pemesanan Anti Ribet</h3>
            <br>
            <p>Pesan produk segar dengan mudah dan cepat melalui aplikasi kami.</p>
        </div>
        <div class="feature-card health">
            <h3>Pilihan Tepat untuk Konsumen</h3>
            <br>
            <p>Produk pilihan terbaik untuk menjaga kualitas dan kesehatan keluarga Anda.</p>
        </div>
        <div class="feature-card fresh">
            <h3>Ragam Pilihan Produk</h3>
            <br>
            <p>Pilih produk langsung dari petani dengan kualitas terbaik di setiap musim.</p>
        </div>
        <div class="feature-card delivery">
            <h3>Pengiriman Cepat & Fleksibel</h3>
            <br>
            <p>Pengiriman yang aman dan cepat untuk memastikan kesegaran produk.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-content">
            <h2>Apa itu PanenKuy?</h2>
            <br>
            <p>PanenKuy adalah platform yang menghubungkan konsumen dengan petani lokal, menyediakan produk segar langsung dari sumbernya.</p>
            <br>
            <p>Kami berkomitmen untuk memberikan pengalaman berbelanja yang mudah, nyaman, dan ramah lingkungan.</p>
        </div>
        <div class="about-logo"></div>
            <img src="../assets/logo.png" alt="PanenKuy Logo">
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        &copy; 2024 PanenKuy. All rights reserved.
    </footer>

</body>
</html>
