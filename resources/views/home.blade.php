<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanenKuy</title>
    <link rel="stylesheet" href="'resources/css/welcome.css'">
    @vite('resources/css/home.css')
</head>
<body>

    <!-- Header Section -->
    <header>
    <div class="logo">PanenKuy</div>
    <input type="text" placeholder="Search" class="search-bar">
    <ul class="navbar">
        <li><a href="/home">Home</a></li>
        <li><a href="{{ route('katalog') }}">Catalog</a></li>
        <li><a href="/kategori">Category</a></li>
        <li><a href="/help">Help</a></li>
        <li><a href="/userpro">👤</a></li>
        <!-- <div class="d-flex align-items-center"> -->
        <!-- <div class="icon">👤</div> -->
            </a>
        </div>
        {{-- dibawah nanti --}}
        <!-- <li><a href="/profile/{id}" class="dropbtn">Hi welcome back, {{ auth()->user()->name }}</a></li> -->
        
       

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

    <!-- Product Section -->
<div class="product-section">
    <h2>Produk Terlaris</h2>
    <div class="products-carousel">
        <button class="carousel-button prev" onclick="scrollCarousel('products', -1)">&#10094;</button>
        <div class="products">
            <div class="product">
                <h4>Beras Premium - 20 kg</h4>
                <p>Rp. 52.000</p>
            </div>
            <div class="product">
                <h4>Selada Keriting - 500 gr</h4>
                <p>Rp. 16.000</p>
            </div>
            <div class="product">
                <h4>Tomat Merah Fresh</h4>
                <p>Rp. 20.000</p>
            </div>
            <div class="product">
                <h4>Sawi Hijau Segar</h4>
                <p>Rp. 17.000</p>
            </div>
            <div class="product">
                <h4>Wortel Segar</h4>
                <p>Rp. 10.000</p>
            </div>
            <div class="product">
                <h4>Cabai Segar</h4>
                <p>Rp. 5.000</p>
            </div>
            <div class="product">
                <h4>Bawang Segar</h4>
                <p>Rp. 8.000</p>
            </div>
            <div class="product">
                <h4>Bayam Segar</h4>
                <p>Rp. 7.000</p>
            </div>
        <!-- Item lain -->
        </div>
        <button class="carousel-button next" onclick="scrollCarousel('products', 1)">&#10095;</button>
    </div>
</div>

<!-- Recommendations Section -->
<div class="recommend-section">
    <h2>Rekomendasi</h2>
    <div class="recommendations-carousel">
        <button class="carousel-button prev" onclick="scrollCarousel('recommendations', -1)">&#10094;</button>
        <div class="recommendations">
            <div class="recommendation">
                <h4>Beras Premium - 20 kg</h4>
                <p>Rp. 52.000</p>
            </div>
            <div class="recommendation">
                <h4>Selada Keriting - 500 gr</h4>
                <p>Rp. 16.000</p>
            </div>
            <div class="recommendation">
                <h4>Tomat Merah Fresh</h4>
                <p>Rp. 20.000</p>
            </div>
            <div class="recommendation">
                <h4>Sawi Hijau Segar</h4>
                <p>Rp. 17.000</p>
            </div>
            <div class="recommendation">
                <h4>Wortel Segar</h4>
                <p>Rp. 10.000</p>
            </div>
            <div class="recommendation">
                <h4>Cabai Segar</h4>
                <p>Rp. 5.000</p>
            </div>
            <div class="recommendation">
                <h4>Bawang Segar</h4>
                <p>Rp. 8.000</p>
            </div>
            <div class="recommendation">
                <h4>Bayam Segar</h4>
                <p>Rp. 7.000</p>
            </div>
            <!-- Item lain -->
        </div>
        <button class="carousel-button next" onclick="scrollCarousel('recommendations', 1)">&#10095;</button>
    </div>
</div>

<!-- Footer Section -->
<footer class="footer">
&copy; 2024 PanenKuy. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
