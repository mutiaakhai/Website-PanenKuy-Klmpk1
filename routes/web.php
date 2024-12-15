<?php

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileController1;
use App\Http\Controllers\ProfileControllerProfile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/amel', function () {
    return view('apaaja');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
    // Route::get('/katalog/create', [KatalogController::class, 'create'])->name('katalog.create');
//     Route::post('/katalog', [KatalogController::class, 'store'])->name('katalog.store');
//     Route::get('/katalog/{id}', [KatalogController::class, 'show'])->name('katalog.show');
    // Route::get('/katalog/{id}/edit', [KatalogController::class, 'edit'])->name('katalog.edit');
    // Route::patch('/katalog/{id}', [KatalogController::class, 'update'])->name('katalog.update');
    // Route::delete('/katalog/{id}', [KatalogController::class, 'destroy'])->name('katalog.destroy');
// });


Route::get ('/home', function () {
    return view('home');
});

Route::get('/Login', function () {
    return view('/layouts/guest');
});
Route::post('/Login', [ProfileController1::class, 'authenticateNew'])->name('loginn');
Route::post('/logout', [ProfileController1::class, 'logout'])->name('logout');


Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::post('/registrasi', [ProfileController1::class, 'storeRegistrasi'])->name('registrasi');



Route::get ('/succes', function () {
    return view('berhasil');
});

Route::get ('/setting', function () {
    return view('setting');
});

Route::get ('/kategori', function () {
    return view('kategori');
});

Route::get ('/userpro', function () {
    return view('user');
});

Route::get ('/help', function () {
    return view('help');
});

// Route::get ('/katalog/tambah', function () {
//     return view('katalog.TambahKatalog');
// });
Route::get('/katalog/tambah', [KatalogController::class, 'tambahKatalog'])->name('lihatKatalog');
Route::post('/katalog/tambah', [KatalogController::class, 'tambahProduk'])->name('tambahProduk');
// Route::get('/katalog', [KatalogController::class, 'katalog'])->name('katalog');
Route::get('/katalog', [KatalogController::class, 'showAll'])->name('katalog');
Route::get('/produk/update/{id}', [KatalogController::class, 'updateKatalogView'])->name('updateProduk');
Route::post('/produk/update/{id}', [KatalogController::class, 'update'])->name('updateProdukPost');
Route::post('/produk/delete/{id}', [KatalogController::class, 'delete'])->name('deleteProduk');


Route::get('/profile/{id}', [ProfileController1::class, 'index'])->name('profile');
Route::get('/profile/edit/', [ProfileController1::class, 'edit'])->name('editProfile');
// Route::delete('/user/delete', [ProfileController1::class, 'deleteUser'])->name('deleteProfil')->middleware('auth');
Route::get('/user/update/{id}', [ProfileControllerProfile::class, 'edit'])->name('editpro')->middleware('auth');
Route::post('/user/update/{id}', [ProfileControllerProfile::class, 'createProfile'])->name('create')->middleware('auth');
Route::post('/user/delete/{id}', [ProfileControllerProfile::class,'deleteProfil'])->name('deleteUser')->middleware('auth');
Route::get('/profile/editt/', [ProfileControllerProfile::class, 'editProfile'])->middleware('auth');




// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

require __DIR__.'/auth.php';
