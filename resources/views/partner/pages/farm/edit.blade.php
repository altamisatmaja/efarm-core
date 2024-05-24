@extends('partner.layouts.app')

@section('title', 'Dashboard | Product')

@section('content')
    <div id="" class="container mx-auto p-4">
        <div class="bg-white shadow rounded-lg p-6">
            @if (session('errors'))
                <p>{{ session('errors') }}</p>
            @endif
            @if (session('success'))
                <p>{{ session('success') }}</p>
            @endif
            <h1 class="text-xl font-semibold mb-4 text-gray-900">Formulir pengajuan partner</h1>
            <p class="text-gray-600  mb-6">Silahkan diisi dengan kesesuaian data yang ada
                dilapangan. Akan terjadi pengecekan dari admin ke lokasi</p>
            <form class="" action="{{ route('partner.farm.edit', $farm->slug_farm) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="nama_hewan">Nama Hewan *</label>
                        <input value="{{ $farm->nama_hewan }}" name="nama_hewan" id="nama_hewan" type="text"
                            placeholder="Nama Partner" class="border p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="kode_hewan">Kode hewan *</label>
                        <input value="{{ $farm->kode_hewan }}" name="kode_hewan" id="kode_hewan" type="text"
                            placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="id_kategori_hewan">Kategori Hewan *</label>
                        <select name="id_kategori_hewan" id="id_kategori_hewan"
                            class="id_kategori_hewan border p-2 rounded w-full">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categorylivestock as $categorylivestocks)
                                <option value="{{ $categorylivestocks->id }}"
                                    {{ $categorylivestocks->id == $farm->id_kategori_hewan ? 'selected' : '' }}>
                                    {{ $categorylivestocks->nama_kategori_hewan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="id_jenis_hewan">Jenis Hewan *</label>
                        <select name="id_jenis_hewan" id="id_jenis_hewan" class="id_jenis_hewan border p-2 rounded w-full">
                            <option value="">Pilih jenis hewan</option>
                            @foreach ($typelivestocks as $typelivestock)
                                <option value="{{ $typelivestock->id }}"
                                    data-category-id="{{ $typelivestock->id_category_livestocks }}"
                                    {{ $typelivestock->id == $farm->id_jenis_hewan ? 'selected' : '' }}>
                                    {{ $typelivestock->nama_jenis_hewan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="id_jenis_gender_hewan">Jenis Gender Hewan *</label>
                        <select name="id_jenis_gender_hewan" id="id_jenis_gender_hewan"
                            class="kabupaten_partner border p-2 rounded w-full">
                            @foreach ($genderlivestocks as $genderlivestock)
                                <option value="{{ $genderlivestock->id }}"
                                    {{ $genderlivestock->id == $farm->id_jenis_gender_hewan ? 'selected' : '' }}>
                                    {{ $genderlivestock->nama_gender }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="id_kondisi_hewan">Kondisi Hewan *</label>
                        <select name="id_kondisi_hewan" id="id_kondisi_hewan" class="border p-2 rounded w-full">
                            @foreach ($conditionlivestock as $conditionlivestocks)
                                <option value="{{ $conditionlivestocks->id }}"
                                    {{ $conditionlivestocks->id == $farm->id_kondisi_hewan ? 'selected' : '' }}>
                                    {{ $conditionlivestocks->nama_kondisi_hewan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="lahir_hewan">Lahir hewan *</label>
                        <input name="lahir_hewan" id="lahir_hewan"
                            value="{{ \Carbon\Carbon::parse($farm->lahir_hewan)->format('Y-m-d') }}" type="date"
                            placeholder="Nama Partner" class="border p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="slug_farm">Slug *</label>
                        <input readonly value="{{ $farm->slug_farm }}" name="slug_farm" id="slug_farm" type="text"
                            placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="deskripsi_hewan">Deskripsi Hewan</label>
                    <textarea name="deskripsi_hewan" id="deskripsi_hewan" type="text" class="border p-2 rounded w-full">{{ $farm->deskripsi_hewan }}</textarea>
                </div>

                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Perbarui
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var selectedCategoryId = $('#id_kategori_hewan').val();
            $('#id_jenis_hewan option').each(function() {
                var typeCategoryId = $(this).data('category-id');
                if (selectedCategoryId == "" || typeCategoryId == selectedCategoryId) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            $('#id_kategori_hewan').change(function() {
                var selectedCategoryId = $(this).val();
                $('#id_jenis_hewan option').each(function() {
                    var typeCategoryId = $(this).data('category-id');
                    if (selectedCategoryId == "" || typeCategoryId == selectedCategoryId) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                $('#id_jenis_hewan').val('');
            });
        });
    </script>
@endsection
