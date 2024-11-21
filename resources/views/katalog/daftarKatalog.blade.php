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
        <a href="{{ route('lihatKatalog') }}" style="padding: 10px 20px; background-color: blue; color: white; text-decoration: none; border-radius: 5px;">buat add</a>
        
    </header>
    <main>
        <div class="container">
            <table class="flex-1">
                <thead>
                  <tr class="bg-[#f8f9fc]">
                    <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-[#0e121b] w-[400px] text-sm font-medium leading-normal">Nama Produk</th>
                    <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-[#0e121b] w-[400px] text-sm font-medium leading-normal">Deskripsi Produk</th>
                    <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-[#0e121b] w-60 text-sm font-medium leading-normal">Harga</th>
                    <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-[#0e121b] w-[400px] text-sm font-medium leading-normal">
                      Stock
                    </th>
                    <th class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-[#0e121b] w-[400px] text-sm font-medium leading-normal">
                    </th>
                    <th
                      class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-sm font-medium leading-normal"
                    ></th>
                    <th
                      class="table-a589e3d2-3512-4ac2-81b6-837810765f5f-column-720 px-4 py-3 text-left text-sm font-medium leading-normal"
                    ></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                          <tr class="border-t border-t-[#d0d7e7]">
                              <td class=" h-[72px] px-4 py-2 w-[400px] text-[#4e6797] text-sm font-normal leading-normal">{{ $product->name }}</td>
                              <td class=" h-[72px] px-4 py-2 w-[400px] text-[#0e121b] text-sm font-normal leading-normal">
                                {{ $product->description }}</td>
                              <td class=" h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                {{ number_format($product->price, 2) }}</td>
                              <td class=" h-[72px] px-4 py-2 w-[400px] text-[#4e6797] text-sm font-normal leading-normal">
                                {{ $product->stock }}</td>
                              <td class=" h-[72px] px-4 py-2 w-60 text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em]">
                                  <a href="{{ route('updateProduk',$product->id ) }}" class="cursor-pointer  text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                  @csrf
                              </td>
                              <td class=" h-[72px] px-4 py-2 w-60 text-[#4e6797] text-sm font-bold leading-normal tracking-[0.015em]">
                                  <form action="{{ route ('deleteProduk',$product->id) }}" method="POST">
                                    @csrf
                                    <button class="cursor-pointer text-red-600 dark:text-red-500 hover:underline">Delete</button>
                                  </form>
                              </td>
                          </tr>
                      @empty
                      <tr class="border-t border-t-[#d0d7e7]">
                        <td class=" h-[72px] px-4 py-2 w-[400px] text-[#0e121b] text-sm font-normal leading-normal">Tidak ada produk yang tersedia.
                        </td>
                      </tr>
                      @endforelse    
                </tbody> 
                
              </table>
        </div>
    </main>
</body>
</html>

{{-- <a href="/ve" class="cursor-pointer hover:text-[#7b92bc]">Delete</a> --}}
                  {{-- @else
                  <tr class="border-t border-t-[#d0d7e7]">
                    <td class=" h-[72px] px-4 py-2 w-[400px] text-[#4e6797] text-sm font-normal leading-normal">No vehicles found. Please add some vehicle</td>
                  </tr>
                  @endif --}}
{{-- <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->stock }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Tidak ada produk yang tersedia.</td>
                        </tr>
                    @endforelse
                </tbody> --}}
