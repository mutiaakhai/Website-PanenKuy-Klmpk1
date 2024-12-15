<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - PanenKuy</title>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/katalog.css')
</head>
<body>
    <header>
        <div class="logo">Panen Kuy</div>
    </header>

    <main>
        <div class="container">
            <form action="{{ route('tambahProduk') }}" method="post">
                @csrf
            <!-- <div class="image-upload-section">
                <div class="uploaded-image">
                    <img src="https://via.placeholder.com/150" alt="Freshbox.id">
                </div>
                <div class="upload-box">
                    <p>+</p>
                    <p>Tambahkan Foto Produk</p>
                </div>
            </div> -->

            <div class="form-section">
                    <div class="form-group">
                        <label for="nama-produk">Nama Produk *</label>
                        <input type="text" id="namaProduk" name="namaProduk" placeholder="Value">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi-produk">Deskripsi Produk *</label>
                        <input type="text" id="deskripsiProduk" name="deskripsiProduk" placeholder="Value">
                    </div>
                    <div class="form-group">
                        <label for="harga-produk">Harga Produk *</label>
                        <input type="text" id="hargaProduk" name="hargaProduk" placeholder="Value">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok *</label>
                        <input type="number" id="stok" name="stok" placeholder="Value">
                    </div>
                    <div class="form-actions">
                        <button type="submit">Simpan</button>
                    </div>
                
            </div>
        </form>
        </div>
    </main>
</body>
</html>