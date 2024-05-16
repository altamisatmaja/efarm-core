@extends('partner.layouts.app')

@section('title', 'Dashboard | Product')

@section('content')
    <div class="container mx-auto p-4">
        <div class="bg-white  shadow rounded-lg p-6">
            <h1 class="text-xl font-semibold mb-4 text-gray-900">Tambah hewan Anda</h1>
            <p class="text-gray-600 mb-6">Silahkan diisi dengan kesesuaian data yang ada
                dilapangan. Akan terjadi pengecekan dari admin ke lokasi</p>
            <form class="form-submission" action="{{ route('partner.farm.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="nama_hewan">Nama hewan *</label>
                        <input name="nama_hewan" id="nama_hewan" type="text" placeholder="Nama Partner"
                            class="border p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="kode_hewan">Kode Hewan *</label>
                        <input name="kode_hewan" id="kode_hewan" type="text"
                            placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="id_kategori_hewan">Kategori Hewan *</label>
                        <select name="id_kategori_hewan" id="id_kategori_hewan"
                            class="id_kategori_hewan border p-2 rounded w-full">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categorylivestock as $category)
                                <option value="{{ $category->id }}">{{ $category->nama_kategori_hewan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="id_jenis_hewan">Jenis Hewan *</label>
                        <select name="id_jenis_hewan" id="id_jenis_hewan" class="id_jenis_hewan border p-2 rounded w-full">
                            <option value="">Pilih Jenis Hewan</option>
                            @foreach ($typelivestocks as $type)
                                <option value="{{ $type->id }}" data-category-id="{{ $type->id_category_livestocks }}">
                                    {{ $type->nama_jenis_hewan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="id_jenis_gender_hewan">Jenis gender</label>
                        <select name="id_jenis_gender_hewan" id="id_jenis_gender_hewan"
                            class="id_jenis_gender_hewan border p-2 rounded w-full">
                            @foreach ($genderlivestocks as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->nama_gender }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="berat_badan_hewan">Berat hewan *</label>
                        <input type="number" name="berat_badan_hewan" id="berat_badan_hewan" placeholder="Masukkan berat"
                            class="border p-2 rounded w-full">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="deskripsi_hewan">Deskripsi hewan</label>
                    <textarea id="deskripsi_hewan" name="deskripsi_hewan" rows="4"
                        class="block p-2.5 w-full text-md text-gray-900 bg-white rounded-lg border border-textbase focus:ring-primarybase focus:border-primarybase "
                        placeholder="Masukkan deskripsi hewan"></textarea>
                </div>
                <div class="mb-4">
                    <div>
                        <label for="lahir_hewan">Tanggal lahir hewan *</label>
                        <input type="date" name="lahir_hewan" id="lahir_hewan" placeholder="Masukkan Tanggal lahir"
                            class="border p-2 rounded w-full">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="id_kondisi_hewan">Kondisi hewan</label>
                    <select name="id_kondisi_hewan" id="id_kondisi_hewan"
                        class="id_kondisi_hewan border p-2 rounded w-full">
                        @foreach ($conditionlivestock as $condition)
                            <option value="{{ $condition->id }}">{{ $condition->nama_kondisi_hewan }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
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

            $('#id_kategori_hewan').trigger('change');
        });
    </script>
@endsection
