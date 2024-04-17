@extends('partner.layouts.app')

@section('title', 'Dashboard | Product')

@section('content')
<div class="container mx-auto p-4">
    <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
        <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Formulir pengajuan partner</h1>
        <p class="text-gray-600 dark:text-gray-300 mb-6">Silahkan diisi dengan kesesuaian data yang ada
            dilapangan. Akan terjadi pengecekan dari admin ke lokasi</p>
        <form class="form-submission" action="{{ route('partner.farm.add'}}" method="POST">
            @csrf
            @method('POST')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="nama_partner">Nama hewan *</label>
                    <input name="nama_partner" id="nama_partner" type="text" placeholder="Nama Partner"
                        class="border p-2 rounded w-full">
                </div>
                <div>
                    <label for="nama_perusahaan_partner">Kode Hewan *</label>
                    <input name="nama_perusahaan_partner" id="nama_perusahaan_partner" type="text"
                        placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="provinsi_partner">Kategori Hewan *</label>
                    <select name="provinsi_partner" id="provinsi_partner"
                        class="provinsi_partner border p-2 rounded w-full">
                        <option data-id="1" value="JAWA TIMUR">Pilih provinsi</option>
                    </select>
                </div>
                <div>
                    <label for="kabupaten_partner">Jenis Hewan *</label>
                    <select disabled name="kabupaten_partner" id="kabupaten_partner"
                        class="kabupaten_partner border p-2 rounded w-full">
                        <option data-id="1" value="KAB. NGAWI">Pilih kabupaten</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label for="kecamatan_partner">Kecamatan *</label>
                    <select disabled name="kecamatan_partner" id="kecamatan_partner"
                        class="kecamatan_partner border p-2 rounded w-full">
                        <option data-id="1" value="Paron">Pilih kecamatan</option>
                    </select>
                </div>
                <div>
                    <label for="kelurahan_partner">kelurahan *</label>
                    <select disabled name="kelurahan_partner" id="kelurahan_partner"
                        class="kelurahan_partner border p-2 rounded w-full">
                        <option data-id="1" value="1">Pilih kelurahan</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 hidden">
                <div>
                    <label>Latitude *</label>
                    <input type="text" name="latitude" id="latitude"
                        placeholder="Masih belum terdeteksi" class="border p-2 rounded w-full">
                </div>
                <div>
                    <label>Longitude *</label>
                    <input type="text" name="longitude" id="longitude"
                        placeholder="Masih belum terdeteksi" class="border p-2 rounded w-full">
                </div>
            </div>
            <div class="mb-4">
                <input value="3" name="id_user" id="id_user" type="text"
                    placeholder="Detail alamat" class="border p-2 rounded w-full hidden">
            </div>
            <div class="mb-4 hidden">
                <label for="status">Status</label>
                <input value="Belum terverifikasi" name="status" id="status" type="text"
                    placeholder="Detail alamat" class="border p-2 rounded w-full">
            </div>
            <div class="mb-4">
                <label for="alamat_partner">Detail alamat</label>
                <input name="alamat_partner" id="alamat_partner" type="text" placeholder="Detail alamat"
                    class="border p-2 rounded w-full">
            </div>
            <div class="mb-4">
                <div>
                    <label for="tanggal_lahir">Tanggal lahir *</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                        placeholder="Masukkan Tanggal lahir" class="border p-2 rounded w-full">
                </div>
            </div>
            <div class="mb-4">
                <div>
                    <label for="jenis_kelamin">Jenis kelamin *</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="border p-2 rounded w-full">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-4">
                <label for="lama_peternakan_berdiri">Berdiri sejak*</label>
                <input name="lama_peternakan_berdiri" id="lama_peternakan_berdiri" type="number"
                    placeholder="Berdiri sejak" class="border p-2 rounded w-full">
            </div>
            <div class="mb-6 pt-4">
                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                    Foto diri
                </label>

                <div class="mb-8">
                    <input type="file" name="foto_profil" id="foto_profil" class="sr-only" />
                    <label for="foto_profil"
                        class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                        <div>
                            <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                Drop files here
                            </span>
                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                Or
                            </span>
                            <span
                                class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                Browse
                            </span>
                        </div>
                    </label>
                </div>

            </div>
            <div class="mb-6 pt-4">
                <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                    Foto peternakan
                </label>

                <div class="mb-8">
                    <input type="file" name="foto_peternakan" id="foto_peternakan" class="sr-only" />
                    <label for="foto_peternakan"
                        class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                        <div>
                            <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                Drop files here
                            </span>
                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                Or
                            </span>
                            <span
                                class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                Browse
                            </span>
                        </div>
                    </label>
                </div>
            </div>

            <div>
                <button type="submit"
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Ajukan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection