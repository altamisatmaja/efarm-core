@extends('admin.layouts.app')

@section('title', 'Dashboard | Create Product')

@section('content')
    <div class="ransition-colors duration-300">
        <div class="container mx-auto p-4">
            <div class="bg-white shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900">Tambah product</h1>
                <p class="text-gray-600 mb-6">Tambah aja bos. gak usah tanya</p>
                <form class="form-tambah-product">
                    <div class="mb-4">
                        <label for="nama_product" class="text-sm font-medium text-gray-700 block mb-2">Nama Produk</label>
                        <input type="text" name="nama_product" id="nama_product" placeholder="Nama product"
                            class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-4">
                        <label for="harga_product" class="text-sm font-medium text-gray-700 block mb-2">Harga Produk</label>
                        <input type="number" name="harga_product" id="harga_product" placeholder="Harga product"
                            class="border p-2 rounded w-full">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div class="">
                            <label for="id_kategori" class="text-sm font-medium text-gray-700 block mb-2">Kategori
                                Product</label>
                            <select name="id_kategori" id="id_kategori" class="border p-2 rounded w-full">
                                @foreach ($categoryproduct as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama_kategori_product }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="">
                            <label for="id_typelivestocks" class="text-sm font-medium text-gray-700 block mb-2">Jenis Hewan
                                Ternak</label>
                            <select id="id_typelivestocks" name="id_typelivestocks" class="border p-2 rounded w-full">
                                @foreach ($typelivestocks as $typelivestock)
                                    <option value="{{ $typelivestock->id }}">{{ $typelivestock->nama_jenis_hewan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="">
                            <label for="id_jenis_gender_hewan" class="text-sm font-medium text-gray-700 block mb-2">Jenis
                                Hewan Ternak</label>
                            <select id="id_jenis_gender_hewan" name="id_jenis_gender_hewan"
                                class="border p-2 rounded w-full">
                                @foreach ($gender_livestocks as $gender)
                                    <option value="{{ $gender->id }}">{{ $gender->nama_gender }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Gambar hewan
                        </label>

                        <div class="mb-8">
                            <input type="file" name="gambar_hewan" id="gambar_hewan" class="sr-only" />
                            <label for="gambar_hewan"
                                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                        Drop files here
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        Or
                                    </span>
                                    <span class="inline-flex rounded py-2 px-7 text-base font-medium text-[#07074D]">
                                        Browse
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi_product" class="text-sm font-medium text-gray-700 block mb-2">Deskripsi
                            Product</label>
                        <textarea id="deskripsi_product" name="deskripsi_product" rows="6" placeholder="Masukkan deskripsi product"
                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="terjual" class="text-sm font-medium text-gray-700 block mb-2">Terjual</label>
                        <input type="number" name="terjual" id="terjual" placeholder="0" readonly
                            class="border p-2 rounded w-full">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div>
                            <label for="diskon" class="text-sm font-medium text-gray-700 block mb-2">Diskon</label>
                            <input type="number" id="diskon" name="diskon" placeholder="Diskon"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="berat_hewan_ternak" class="text-sm font-medium text-gray-700 block mb-2">Berat
                                Hewan</label>
                            <input type="number" id="berat_hewan_ternak" name="berat_hewan_ternak"
                                placeholder="Berat dalam kg" class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="stok_hewan_ternak" class="text-sm font-medium text-gray-700 block mb-2">Stok
                                hewan</label>
                            <input type="number" id="stok_hewan_ternak" name="stok_hewan_ternak" placeholder="Stok hewan"
                                class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="lahir_hewan" class="text-sm font-medium text-gray-700 block mb-2">Lahir
                                hewan</label>
                            <input type="number" id="lahir_hewan" name="lahir_hewan" placeholder="Lahir hewan dalam bulan"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="tags" class="text-sm font-medium text-gray-700 block mb-2">Tags</label>
                            <input type="text" id="tags" name="tags" placeholder="Tags"
                                class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="id_partner" class="text-sm font-medium text-gray-700 block mb-2">Id Partner
                            readonly</label>
                        <input type="number" name="id_partner" id="id_partner" placeholder="Anda"
                            class="border p-2 rounded w-full">
                    </div>
                    <button type="submit" id="theme-toggle"
                        class="px-4 w-full py-2 rounded bg-blue-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(function() {
                // Tambah data
                $('.form-tambah-product').submit(function(e) {
                    e.preventDefault();
                    const form = $(this);
                    const token = localStorage.getItem('token-efarm');
                    var formData = new FormData(this);
                    console.log(formData);

                    $.ajax({
                        url: '/api/product',
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "accept": "application/json",
                            "Authorization": "Bearer" + token,
                            "Access-Control-Allow-Origin": "*"
                        },
                        success: function(data) {
                            if (data.success) {
                                alert('Data berhasil ditambahkan');
                                location.reload();
                            }
                        }
                    })
                });
            })
        </script>
    @endpush
@endsection
