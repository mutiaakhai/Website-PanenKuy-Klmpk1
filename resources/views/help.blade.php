<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help - Panen Kuy</title>
    <link rel="stylesheet" href="styles.css">
    @vite('resources/css/help.css')
</head>
<body>
    <div class="help-container">
    <header class="header">
    <h1><a href="/home" style="text-decoration: none; color: inherit;">Help</a></h1>
    </header>
        <main class="main-content">
            <section class="help-section">
                <h2>Pusat Bantuan</h2>
                <div class="report-box">
                    <label for="report">Laporan Saya</label>
                    <textarea id="report" placeholder="Tulis Laporan Anda Disini"></textarea>
                    <button class="submit-button">Kirim</button>
                </div>
                <div class="faq-section">
                    <h3>FAQ</h3>
                    <ul>
                        <li><a href="#">Bagaimana cara saya menghubungi Layanan Pengaduan Konsumen?</a></li>
                        <li><a href="#">Mengapa status pengajuan pengembalian barang/dana saya masih dalam Tinjauan PanenKuy?</a></li>
                        <li><a href="#">Bagaimana cara menjaga keamanan akun PanenKuy saya?</a></li>
                        <li><a href="#">Bagaimana cara melaporkan produk?</a></li>
                    </ul>
                </div>
                <button class="report-button">Laporan Saya</button>
            </section>
        </main>
    </div>
</body>
</html>
