<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile PanenKuy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <style>
        .navbar {
    position: fixed; /* Tetap di atas meskipun halaman digulir */
    top: 0;
    left: 0;
    width: 100%; /* Lebar penuh */
    background-color: #D8FEA1; /* Warna hitam */
    padding: 17px 20px;
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
<nav class="navbar">
        <div class="navbar-logo">
            <img src="/assets/logo.png">
        </div>
    </nav>
<body class="bg-green-100 font-poppins">
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-green-200 shadow-lg rounded-lg p-8 w-full max-w-2xl mt-[8%]">
            <h1 class="text-2xl font-semibold text-green-900 mb-6">Edit Profile PanenKuy</h1>
            <form action="{{ route('create', $user->id) }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label for="name" class="block text-sm font-medium text-green-900">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full border-green-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Masukkan nama Anda" required>
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-green-900">Nomor Telepon</label>
                        <input type="number" id="phone" name="phone" class="mt-1 block w-full border-green-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="123456789101112" required>
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-green-900">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full border-green-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="laureen@meta.com" required>
                </div>

                <div>
                    <label for="address" class="block text-sm font-medium text-green-900">Alamat</label>
                    <input type="text" id="address" name="address" class="mt-1 block w-full border-green-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Jalan Kenangan" required>
                </div>

                <div>
                    <label for="bio" class="block text-sm font-medium text-green-900">Bio</label>
                    <input type="text" id="bio" name="bio" class="mt-1 block w-full border-green-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Masukkan bio Anda" required>
                </div>

                <div class="relative">
                    <label for="password" class="block text-sm font-medium text-green-900">Kata Sandi</label>
                    <div class="mt-1 flex items-center">
                        <input type="password" id="password" name="password" class="block w-full border-green-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="•••••••••" required>
                        <button type="button" onclick="togglePassword()" class="ml-2 text-green-600 hover:text-green-800">
                    </div>
                </div>

                <div class="flex items-center">
                    <input id="remember" type="checkbox" class="h-4 w-4 text-green-600 border-green-300 rounded focus:ring-green-500" required>
                    <label for="remember" class="ml-2 block text-sm text-green-900">Saya setuju dengan <a href="#" class="text-green-700 hover:underline">syarat dan ketentuan</a>.</label>
                </div>

                <div>
                    <button type="submit" class="w-full py-2 px-4 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        }
    </script>
</body>
</html>
