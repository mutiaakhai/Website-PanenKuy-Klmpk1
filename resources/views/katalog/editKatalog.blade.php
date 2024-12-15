<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - PanenKuy</title>
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/katalog.css')
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

</head>
<body>
    <header>
        <div class="logo">Panen Kuy</div>
        <div class="logo">Laman Edit</div>

    </header>

    <main>
        <div class="container">
            <form action="{{ route('updateProdukPost', $product->id) }}" method="post">
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
            @if (session()->has('updateFailed'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
          <span class="font-medium">{{ session('updateFailed') }}</span> Anda tidak berhak update item tersebut bos!
        </div>
        @endif
            <div class="form-section">
                
                    <div class="form-group">
                        <label for="nama-produk">Nama Produk *</label>
                        <input type="text" id="namaProduk" name="namaProduk" placeholder="Masukkan nama produk"value="{{ $product->name }}" >
                    </div>
                    <div class="form-group">
                        <label for="deskripsi-produk">Deskripsi Produk *</label>
                        <input type="text" id="deskripsiProduk" name="deskripsiProduk" placeholder="Masukkan deskripsi produk" value="{{ $product->description }}">
                    </div>
                    <div class="form-group">
                        <label for="harga-produk">Harga Produk *</label>
                        <input type="text" id="hargaProduk" name="hargaProduk" placeholder="Masukkan harga produk"value="{{ $product->price }}" >
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok *</label>
                        <input type="number" id="stok" name="stok" placeholder="Masukkan stock produk" value="{{ $product->stock }}">
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