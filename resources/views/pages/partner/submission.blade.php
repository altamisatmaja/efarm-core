<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <title>eFarm | Partner</title>
    <style>
        * {
            font-family: Montserrat;
        }
    </style>
</head>

<body>
    <div>
        @include('includes.navbar')
        <div class="container mx-auto p-4">
            <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Formulir pengajuan partner</h1>
                <p class="text-gray-600 dark:text-gray-300 mb-6">Silahkan diisi dengan kesesuaian data yang ada
                    dilapangan. Akan terjadi pengecekan dari admin ke lokasi</p>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="nama_partner">Nama Partner *</label>
                            <input name="nama_partner" id="nama_partner" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="nama_peternakan">Nama peternakan *</label>
                            <input name="nama_peternakan" id="nama_peternakan" type="text"
                                placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="provinsi_partner">Provinsi *</label>
                            <select name="pronvisi_partner" id="provinsi_partner" class="provinsi_partner border p-2 rounded w-full">
                                <option value="1">Aceh</option>
                            </select>
                        </div>
                        <div>
                            <label for="kabupaten_partner">Kabupaten *</label>
                            <input name="kabupaten_partner" id="kabupaten_partner" type="text"
                                placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="kecamatan_partner">Kecamatan *</label>
                            <input name="kecamatan_partner" id="kecamatan_partner" type="text"
                                placeholder="Nama Partner" class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="kelurahan_partner">Kelurahan *</label>
                            <input name="kelurahan_partner" id="kelurahan_partner" type="text"
                                placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                        </div>
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
                        <label for="alamat_partner">Detail alamat</label>
                        <input name="alamat_partner" id="alamat_partner" type="text" placeholder="Detail alamat"
                            class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-4">
                        <label for="lama_peternakan_berdiri">Lama peternakan berdiri</label>
                        <input name="lama_peternakan_berdiri" id="lama_peternakan_berdiri" type="text"
                            placeholder="Detail alamat" class="border p-2 rounded w-full">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <label for="kode_zip_partner">Kode Zip</label>
                        <input name="kode_zip_partner" id="kode_zip_partner" type="text"
                            placeholder="ZIP / Postal code" class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Foto diri
                        </label>

                        <div class="mb-8">
                            <input type="file" name="file" id="file" class="sr-only" />
                            <label for="file"
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
                            <input type="file" name="file" id="file" class="sr-only" />
                            <label for="file"
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
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {

            // get provinsi
            $.ajax({
                url: 'https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json',
                method: 'GET',
                success: function(response) {
                    console.log(response);

                    let row = '';

                    const selectprovinsi = $('.provinsi_partner');
                    selectprovinsi.empty();

                    selectprovinsi.append($('<option>', {
                        value: '',
                        text: 'Pilih provinsi'
                    }));

                    response.map(function(data) {
                        console.log(data);
                        selectprovinsi.append($('<option>', {
                            value: data.id,
                            text: data.name,
                        }))
                    });
                },
                error: function(xhr, status, error) {
                    console.error(status, error);
                }
            });



            // Read data
            $.ajax({
                url: '/api/categorylivestock',
                success: function({
                    data
                }) {
                    let row = '';

                    data.map(function(val, index) {
                        row += `
                        <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <span>${index+1}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    ${val.nama_kategori_hewan}</td>
                                <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    ${val.deskripsi_kategori_hewan}</td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-6">
                                        <a class="edit-data-categorylivestock" data-id="${val.id}" data-toggle="modal">
                                        <button
                                            class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                            Edit
                                        </button>
                                    </a>
                                    <a class="hapus-data-categorylivestock" data-id="${val.id}">
                                        <button
                                            class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                            Hapus
                                        </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                    $('tbody').append(row);
                }
            });

            // Tambah data
            $('.form-tambah-categorylivestock').submit(function(e) {
                e.preventDefault();
                const form = $(this);
                const token = localStorage.getItem('token-efarm');
                var formData = new FormData(this);
                console.log(formData);


                $.ajax({
                    url: '/api/categorylivestock',
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
</body>

</html>
