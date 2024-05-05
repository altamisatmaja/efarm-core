@extends('admin.layouts.app')

@section('title', 'Dashboard | Edit Kategori Hewan Ternak')

@section('content')
    <section class="w-full px-4 mx-auto">
        <div class="flex flex-col">
            <div class="w-full flex justify-center items-center">
                <div class="w-full bg-whitemx-auto rounded">
                    <div class="py-4 text-left px-6">
                        @if (session('success'))
                            <div class="bg-green-200 px-4 py-2 rounded-md text-green-800">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="bg-green-200 px-4 py-2 rounded-md text-green-800">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">Tambah kategori produk</p>
                        </div>
                        <form class=""
                            action="{{ route('admin.typelivestock.update', $categorylivestock->slug_typelivestocks) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-5">
                                <label for="nama_jenis_hewan" class="mb-3 block text-base font-medium text-[#07074D]">
                                    Masukkan nama kategori product
                                </label>
                                <input value="{{ $categorylivestock->nama_jenis_hewan }}" type="text"
                                    name="nama_jenis_hewan" id="nama_jenis_hewan"
                                    placeholder="Masukkan nama jenis hewan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            @error('nama_jenis_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div class="mb-6 pt-4">
                                <label for="deskripsi_jenis_hewan"
                                    class="mb-3 block text-base font-medium text-[#07074D]">
                                    Masukkan deskripsi kategori product
                                </label>
                                <textarea name="deskripsi_jenis_hewan" id="deskripsi_jenis_hewan"
                                    placeholder="Masukkan deskripsi kategori product"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">{{ $categorylivestock->deskripsi_jenis_hewan }}</textarea>
                            </div>
                            @error('deskripsi_jenis_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div class="mb-6 pt-4">
                                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                                    Upload gambar
                                </label>
                                <div class="mb-8">
                                    <input type="file" name="gambar_livestocks" id="gambar_livestocks"
                                        class="sr-only" onchange="validateImage(this)" />
                                    <label for="gambar_livestocks"
                                        class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                        <div>
                                            <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                                Tambah gambar disini
                                            </span>
                                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                                atau
                                            </span>
                                            <span
                                                class="inline-flex rounded py-2 px-7 text-base font-medium text-[#07074D]">
                                                Cari
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                @error('gambar_livestocks')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <div id="image-preview" class="mt-4"></div>
                                <span id="file-error" class="text-red-500"></span>
                            </div>
                            <div class="pb-4">
                                <button type="submit"
                                    class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        @if ($categorylivestock->gambar_livestocks && !$errors->has('gambar_livestocks'))
            <script>
                $(document).ready(function() {
                    var fileName = "{{ $categorylivestock->gambar_livestocks }}";
                    $('#image-preview').html(`
                <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                    <div class="flex items-center justify-between">
                        <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                            ${fileName}
                        </span>
                    </div>
                </div>
            `);
                });
            </script>
        @endif
        <script>
            $(document).ready(function() {
                $('#gambar_livestocks').change(function(e) {
                    var fileName = e.target.files[0].name;
                    var fileExt = fileName.split('.').pop();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                    };
                    reader.readAsDataURL(this.files[0]);
                });
            });

            function validateImage(input) {
                var file = input.files[0];
                var fileType = file.type.split('/').shift();
                var fileName = file.name;

                if (fileType !== 'image') {
                    document.getElementById('file-error').innerHTML = 'Gambar kategori produk harus berupa file gambar.';
                    document.getElementById('image-preview').innerHTML = '';
                } else {
                    document.getElementById('file-error').innerHTML = '';

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#image-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                    };
                    reader.readAsDataURL(file);
                }
            }

            function submitForm() {
                var fileInput = document.getElementById('gambar_livestocks');
                var file = fileInput.files[0];
                var fileType = file.type.split('/').shift();

                if (fileType !== 'image') {
                    document.getElementById('file-error').innerHTML = 'Gambar kategori produk harus berupa file gambar.';
                } else {
                    document.getElementById('category-form').submit();
                }
            }
        </script>
    @endpush
@endsection
