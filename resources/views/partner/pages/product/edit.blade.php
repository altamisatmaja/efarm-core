@extends('partner.layouts.app')

@section('title', 'Dashboard | Edit Product')

@section('content')
    <div class="ransition-colors duration-300">
        @if (session('errors'))
            <p>{{ session('errors') }}</p>
        @endif
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <div class="container mx-auto p-4">
            <div class="bg-white shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900">Tambah product</h1>
                <p class="text-gray-600 mb-6">Edit aja bos. gak usah tanya</p>
                <form class="" action="{{ route('partner.product.update', $products->slug_product) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nama_product" class="text-sm font-medium text-gray-700 block mb-2">Nama
                            Produk</label>
                        <input value="{{ $products->nama_product }}" type="text" name="nama_product" id="nama_product"
                            placeholder="Nama product" class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-4">
                        <label for="harga_product" class="text-sm font-medium text-gray-700 block mb-2">Harga
                            Produk</label>
                        <input value="{{ $products->harga_product }}" type="number" name="harga_product" id="harga_product"
                            placeholder="Harga product" class="border p-2 rounded w-full">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div class="">
                            <label for="id_kategori" class="">Kategori
                                Product</label>
                            <select name="id_kategori" id="id_kategori" class="border p-2 rounded w-full">
                                @foreach ($categoryproduct as $category)
                                    <option value="{{ $category->id  }}" {{ $products->id_kategori == $category->id ? 'selected' : '' }}>{{ $category->nama_kategori_product }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="id_category_livestocks">Kategori Hewan *</label>
                            <select name="id_category_livestocks" id="id_category_livestocks"
                            class="id_category_livestocks border p-2 rounded w-full">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categorylivestock as $category)
                                <option value="{{ $category->id  }}" {{ $products->id_category_livestocks == $category->id ? 'selected' : '' }}>{{ $category->nama_kategori_hewan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="id_typelivestocks">Jenis Hewan *</label>
                            <select name="id_typelivestocks" id="id_typelivestocks"
                                class="id_typelivestocks border p-2 rounded w-full">
                                <option value="">Pilih Jenis Hewan</option>
                                @foreach ($typelivestocks as $type)
                                    <option value="{{ $type->id }}" {{ $products->id_typelivestocks == $type->id ? 'selected' : '' }}
                                        data-category-id="{{ $type->id_category_livestocks }}">
                                        {{ $type->nama_jenis_hewan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="mb-4">
                        <label for="id_jenis_gender_hewan" class="text-sm font-medium text-gray-700 block mb-2">Jenis
                            Hewan Ternak</label>
                        <select id="id_jenis_gender_hewan" name="id_jenis_gender_hewan" class="border p-2 rounded w-full">
                            @foreach ($gender_livestocks as $gender)
                                <option value="{{ $gender->id }}" {{ $gender->id == $products->id_jenis_gender_hewan ? 'selected' : '' }}>{{ $gender->nama_gender }}</option>
                            @endforeach
                        </select>
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
                        <textarea  id="deskripsi_product" name="deskripsi_product" rows="6" placeholder="Masukkan deskripsi product"
                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500">{{ $products->deskripsi_product }}</textarea>
                    </div>
                    <div class="mb-4 hidden">
                        <label for="terjual" class="text-sm font-medium text-gray-700 block mb-2">Terjual</label>
                        <input value="{{ $products->terjual }}" type="number" value="0" name="terjual" id="terjual" placeholder="0" readonly
                            class="border p-2 rounded w-full">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div>
                            <label for="diskon" class="text-sm font-medium text-gray-700 block mb-2">Diskon</label>
                            <input value="{{ $products->diskon }}" type="number" id="diskon" name="diskon" placeholder="Diskon"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="berat_hewan_ternak" class="text-sm font-medium text-gray-700 block mb-2">Berat
                                Hewan</label>
                            <input value="{{ $products->berat_hewan_ternak }}" type="number" id="berat_hewan_ternak" name="berat_hewan_ternak"
                                placeholder="Berat dalam kg" class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="stok_hewan_ternak" class="text-sm font-medium text-gray-700 block mb-2">Stok
                                hewan</label>
                            <input value="{{ $products->stok_hewan_ternak }}" type="number" id="stok_hewan_ternak" name="stok_hewan_ternak"
                                placeholder="Stok hewan" class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="lahir_hewan" class="text-sm font-medium text-gray-700 block mb-2">Lahir
                                hewan</label>
                            <input value="{{ $products->lahir_hewan }}" type="number" id="lahir_hewan" name="lahir_hewan"
                                placeholder="Lahir hewan dalam bulan" class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="mb-4 hidden">
                        <label for="id_partner" class="text-sm font-medium text-gray-700 block mb-2">Id Partner
                            readonly</label>
                        <input type="number" value="{{ $partner->id }}" name="id_partner" id="id_partner"
                            placeholder="{{ $partner->id }}" class="border p-2 rounded w-full">
                        <input type="number" value="0" name="diskon" id="diskon" placeholder="0"
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
            $(document).ready(function() {
                $('#id_category_livestocks').change(function() {
                    var selectedCategoryId = $(this).val();
                    $('#id_typelivestocks option').each(function() {
                        var typeCategoryId = $(this).data('category-id');
                        if (selectedCategoryId == "" || typeCategoryId == selectedCategoryId) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                    $('#id_typelivestocks').val('');
                });
            });
        </script>
    @endpush
@endsection
