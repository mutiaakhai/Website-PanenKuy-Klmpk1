<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class KatalogController extends Controller
{

    // --untuk add product

    // fitur dibawah untuk return view form
    public function tambahKatalog(){
        return view('katalog.TambahKatalog');   
    }

    // fitur dibawah untuk operasi createnya
    public function tambahProduk(Request $request){
        $request->validate([
            'namaProduk' => 'required|string',
            'deskripsiProduk' => 'string',
            'hargaProduk' => 'required|integer',
            'stok' => 'required|integer',
        ]);
        try {
            $request_ = Auth::user();
            $new_katalog = new Katalog();
            $new_katalog->name = $request->namaProduk;
            $new_katalog->description = $request->deskripsiProduk;
            $new_katalog->price = $request->hargaProduk;
            $new_katalog->stock = $request->stok;
            $new_katalog->user_id = $request_->id;
            $new_katalog->save();
        return redirect('/katalog');
        } catch (\Exception $e) {
            Log::error('Error storing product: ' . $e->getMessage(), [
                'request' => $request->all(),
            ]);
        }
    }

    // fitur read
    // fitur dibawah untuk return view dari daftar katalog
    public function katalog(){
        return view('katalog.daftarKatalog');
    }

        // fitur dibawah untuk operasi read dari database 
        public function showAll()
        {
            $products = Katalog::all();
            try {
                return view('katalog.daftarKatalog', compact('products'));
            } catch (\Exception $e) {
                Log::error('Error fetching products: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Terjadi kesalahan saat mengambil data produk.');
            }
        }

        // update
        // fitur dibawah untuk return view update katalog 
    public function updateKatalogView ($id){
        $product = Katalog::find($id);
        return view('katalog.editKatalog',compact("product"));
    }
        // fitur dibawah untuk logic update dengan database
    public function update(Request $request, $id){
        $product= Katalog::find($id);
        $authUser=Auth::user();
        if($authUser->id===$product->user_id){
            $product->name = $request->namaProduk;
            $product->description = $request->deskripsiProduk;
            $product->price = $request->hargaProduk;
            $product->stock = $request->stok;
            $product->update();
        }
        else{
            return back()->with('updateFailed', 'Update failed!');
        }
        // tambahin untuk update khusus user id yang sama
        
        return redirect('/katalog');

    }
    
    // fungsi dibawah untuk delete
    public function delete($id){
        $product= Katalog::find($id);
        $product->delete();
        return redirect('/katalog');
    }
}

//     public function update(Request $request, $id)
// {
//     // dd($id);
//     try {
//         $user = Auth::user();

//         // Fetch the product and check if the current user is the owner
//         $product = DB::table('katalog')->where('id', $id)->first();
//         if (!$product || $product->user_id !== $user->id) {
//             return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk memperbarui produk ini.');
//         }

//         // Validate the request data
//         $validated = $request->validate([
//             'namaProduk' => 'required|string|max:255',
//             'deskripsiProduk' => 'nullable|string',
//             'hargaProduk' => 'required|numeric|min:0',
//             'stok' => 'required|integer|min:0',
//             'kategori' => 'required|array|min:1',
//             'kategori.*' => 'integer|exists:kategori,id',
//         ]);

//         $selectedCategories = $validated['kategori'];

//         // Check if all categories (1, 2, 3, 4) are selected
//         $containsAll = collect([1, 2, 3, 4])->every(fn($cat) => in_array($cat, $selectedCategories));

//         if ($containsAll) {
//             // Add new computed category (5) if it doesn’t already exist
//             if (!DB::table('kategori')->where('id', 5)->exists()) {
//                 DB::table('kategori')->insert([
//                     'id' => 5,
//                     'name' => 'Semua Kategori',
//                     'description' => 'Gabungan semua kategori',
//                     'created_at' => now(),
//                     'updated_at' => now(),
//                 ]);
//             }
//             $selectedCategories[] = 5; // Include category 5
//         }

//         // Update the main product fields
//         DB::table('katalog')
//             ->where('id', $id)
//             ->update([
//                 'name' => $validated['namaProduk'],
//                 'description' => $validated['deskripsiProduk'],
//                 'price' => $validated['hargaProduk'],
//                 'stock' => $validated['stok'],
//                 'updated_at' => now(),
//             ]);

//         // Delete old category associations and insert new ones
//         DB::table('katalog')->where('id', $id)->delete();
//         foreach ($selectedCategories as $categoryId) {
//             DB::table('katalog')->insert([
//                 'id' => $id,
//                 'user_id' => $user->id,
//                 'category_id' => $categoryId,
//                 'name' => $validated['namaProduk'],
//                 'description' => $validated['deskripsiProduk'],
//                 'price' => $validated['hargaProduk'],
//                 'stock' => $validated['stok'],
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ]);
//         }

//         return view('katalog.daftarKatalog');
//     } catch (\Exception $e) {
//         Log::error('Error updating product: ' . $e->getMessage(), [
//             'request' => $request->all(),
//         ]);

//         return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui produk. Silakan coba lagi.');
//     }
// }


// public function store(Request $request)
// {
//     // Validate the request data
//     $validated = $request->validate([
//         'namaProduk' => 'required|string|max:255',
//         'deskripsiProduk' => 'nullable|string',
//         'hargaProduk' => 'required|numeric|min:0',
//         'stok' => 'required|integer|min:0',
//         'kategori' => 'required|array|min:1', // Ensure at least one category is selected
//         'kategori.*' => 'integer|exists:kategori,id',
//     ]);
//     $request_ = Auth::user();
//     $selectedCategories = $validated['categories'];

//     // Check if all categories (1, 2, 3, 4) are selected
//     $containsAll = collect([1, 2, 3, 4])->every(fn($cat) => in_array($cat, $selectedCategories));

//     if ($containsAll) {
//         // Add new computed category (5) if it doesn’t already exist
//         if (!DB::table('kategori')->where('id', 5)->exists()) {
//             DB::table('kategori')->insert([
//                 'id' => 5,
//                 'name' => 'Semua Kategori',
//                 'description' => 'Gabungan semua kategori',
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ]);
//         }
//         $selectedCategories[] = 5; // Include category 5
//     }

//     // Insert each category as a new row in the katalog table
//     foreach ($selectedCategories as $categoryId) {
//         DB::table('katalog')->insert([
//             'user_id' => $request_->id, // Assuming you have user authentication
//             'category_id' => $categoryId,
//             'name' => $validated['name'],
//             'description' => $validated['description'],
//             'price' => $validated['price'],
//             'stock' => $validated['stock'],
//             'created_at' => now(),
//             'updated_at' => now(),
//         ]);
//     }

//     return redirect()->back()->with('success', 'Produk berhasil disimpan!');
// }
// public function store(Request $request)
// {
//     try {
//         $user = Auth::user(); 
//         $request->validate([
//             'namaProduk' => 'required|string|max:255',
//             'deskripsiProduk' => 'nullable|string',
//             'hargaProduk' => 'required|numeric|min:0',
//             'stok' => 'required|integer|min:0',
//         ]);
//         return redirect('/katalog');
//     } catch (\Exception $e) {
//         // Log error to storage/logs/laravel.log
//         Log::error('Error storing product: ' . $e->getMessage(), [
//             'request' => $request->all(),
//         ]);

//         // Redirect back with error message
//         return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan produk. Silakan coba lagi.');
//     }
// }


