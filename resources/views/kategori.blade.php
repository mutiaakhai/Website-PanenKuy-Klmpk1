<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanenKuy</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f9eb;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #d8f3dc;
            padding: 10px 20px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #2d6a4f;
        }

        .search-bar {
            display: flex;
        }

        .search-bar input {
            padding: 5px;
            font-size: 16px;
        }

        .search-bar button {
            background-color: #2d6a4f;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .icons span {
            margin-left: 15px;
            font-size: 20px;
            cursor: pointer;
        }

        .filter {
            padding: 20px;
            background-color: #d8f3dc;
            width: 200px;
            float: left;
            height: 100%;
        }

        .filter h3 {
            margin-bottom: 10px;
        }

        .filter ul {
            list-style: none;
            padding: 0;
        }

        .filter li {
            margin-bottom: 5px;
            cursor: pointer;
        }

        .categories {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            background-color: #95d5b2;
            margin-left: 220px;
        }

        .category {
            padding: 10px 15px;
            background-color: #52b788;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .category.new {
            background-color: #ffcc00;
            color: black;
        }

        .category.active {
            background-color: #1b4332;
            color: white;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
            margin-left: 220px;
        }

        .product {
            border: 1px solid #d3d3d3;
            border-radius: 10px;
            padding: 10px;
            background-color: white;
            text-align: center;
        }

        .product img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .product p {
            margin: 5px 0;
        }

        .product .price {
            font-weight: bold;
            color: #2d6a4f;
        }

        .sorting {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            margin-left: 220px;
        }

        .sorting button {
            background-color: #52b788;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 5px;
        }

        .sorting button.active {
            background-color: #1b4332;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <a href="/home" class="logo">PanenKuy</a>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button>🔍</button>
            </div>
            <div class="icons">
                <span>💚</span>
                <span>👤</span>
            </div>
        </header>

        <div class="filter">
            <h3>FILTER</h3>
            <div>
                <p>Lokasi</p>
                <ul>
                    <li>Jabodetabek</li>
                    <li>Pulau Jawa</li>
                    <li>Pulau Sumatera</li>
                    <li>Pulau Sulawesi</li>
                    <li>Pulau Kalimantan</li>
                    <li>Pulau Papua</li>
                    <li>Bali</li>
                </ul>
            </div>
            <div>
                <p>Opsi Pengiriman</p>
                <ul>
                    <li>Instant</li>
                    <li>Sameday</li>
                    <li>JNE</li>
                    <li>SiCepat</li>
                </ul>
            </div>
            <div>
                <p>Harga</p>
                <ul>
                    <li onclick="sortByPrice('asc')">Terendah - Tertinggi</li>
                    <li onclick="sortByPrice('desc')">Tertinggi - Terendah</li>
                </ul>
            </div>
        </div>

        <div class="sorting">
            <button class="sort-button active" onclick="sortProducts('terkait')">Terkait</button>
            <button class="sort-button" onclick="sortProducts('terbaru')">Terbaru</button>
            <button class="sort-button" onclick="sortProducts('terlaris')">Terlaris</button>
        </div>

        <div class="categories">
            <div class="category active" onclick="filterCategory('all')">Semua Kategori</div>
            <div class="category new" onclick="filterCategory('produk-baru')">Produk Baru</div>
            <div class="category" onclick="filterCategory('sayur')">Sayur</div>
            <div class="category" onclick="filterCategory('buah')">Buah</div>
            <div class="category" onclick="filterCategory('bahan-pokok')">Bahan Pokok</div>
            <div class="category" onclick="filterCategory('rempah')">Rempah-Rempah</div>
        </div>

        <div class="products" id="products-container">
            <div class="product" data-category="sayur" data-price="30000">
                <img src="assets/tomat.jpeg" alt="Tomat Segar">
                <p>Tomat Segar - 1 Kg</p>
                <p class="price">Rp. 30.000</p>
                <p>⭐ 4.5 Kediri</p>
            </div>
            <div class="product" data-category="sayur" data-price="25000">
                <img src="assets/brokoli.jpeg" alt="Brokoli Hijau">
                <p>Brokoli Hijau - 500 Gr</p>
                <p class="price">Rp. 25.000</p>
                <p>⭐ 4.7 Malang</p>
            </div>
            <div class="product" data-category="buah" data-price="35000">
                <img src="assets/apel.jpg" alt="Apel Malang">
                <p>Apel Malang - 1 Kg</p>
                <p class="price">Rp. 35.000</p>
                <p>⭐ 4.8 Batu</p>
            </div>
            <div class="product" data-category="buah" data-price="40000">
                <img src="assets/mangga.jpeg" alt="Mangga Harum Manis">
                <p>Mangga Harum Manis - 1 Kg</p>
                <p class="price">Rp. 40.000</p>
                <p>⭐ 4.6 Probolinggo</p>
            </div>
            <div class="product" data-category="bahan-pokok" data-price="60000">
                <img src="assets/beras.jpeg" alt="Beras Premium">
                <p>Beras Premium - 5 Kg</p>
                <p class="price">Rp. 60.000</p>
                <p>⭐ 4.9 Kediri</p>
            </div>
            <div class="product" data-category="rempah" data-price="50000">
                <img src="assets/jahe.jpeg" alt="Jahe Merah">
                <p>Jahe Merah - 1 Kg</p>
                <p class="price">Rp. 50.000</p>
                <p>⭐ 4.7 Jakarta</p>
            </div>
        </div>
    </div>

    <script>
        function sortProducts(type) {
            const productsContainer = document.getElementById('products-container');
            const products = Array.from(productsContainer.children);

            if (type === 'terkait') {
                products.sort((a, b) => a.textContent.localeCompare(b.textContent));
            } else if (type === 'terbaru') {
                products.reverse();
            } else if (type === 'terlaris') {
                products.sort((a, b) => b.querySelector('.price').textContent.localeCompare(a.querySelector('.price').textContent));
            }

            productsContainer.innerHTML = '';
            products.forEach(product => productsContainer.appendChild(product));

            document.querySelectorAll('.sort-button').forEach(button => button.classList.remove('active'));
            document.querySelector(`[onclick="sortProducts('${type}')"]`).classList.add('active');
        }

        function filterCategory(category) {
            const products = document.querySelectorAll('.product');
            products.forEach(product => {
                if (category === 'all' || product.dataset.category === category) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });

            document.querySelectorAll('.category').forEach(cat => cat.classList.remove('active'));
            document.querySelector(`[onclick="filterCategory('${category}')"]`).classList.add('active');
        }

        function sortByPrice(order) {
            console.log(`Sorting by price: ${order}`); // Debugging
            const productsContainer = document.getElementById('products-container');
            const products = Array.from(productsContainer.children);

            products.sort((a, b) => {
                const priceA = parseInt(a.dataset.price, 10);
                const priceB = parseInt(b.dataset.price, 10);
                return order === 'asc' ? priceA - priceB : priceB - priceA;
            });

            productsContainer.innerHTML = '';
            products.forEach(product => productsContainer.appendChild(product));
        }
    </script>
</body>
</html>
