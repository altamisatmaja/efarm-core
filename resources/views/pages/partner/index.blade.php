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
        <div class="w-full  h-full flex justify-end items-center">
            <div class="flex">
                <a href="{{ route('partner.login') }}" class="cursor-pointer">
                    <button
                        class="middle none center mr-4 rounded-lg bg-primarybase py-2 px-9 font-sans text-md font-bold text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:opacity-50 disabled:shadow-none"
                        style="outline: none;" data-ripple-light="true">
                        Masuk
                    </button>
                </a>
            </div>
        </div>
        <div class="container mx-auto p-4">
            <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Formulir akun partner</h1>
                <p class="text-gray-600 dark:text-gray-300 mb-6">Silahkan diisi sesuai akun yang anda inginkan</p>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="nama">Nama *</label>
                            <input name="nama" id="nama" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="username">Username *</label>
                            <input name="username" id="username" type="text" placeholder="Masukkan nama peternakan"
                                class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label for="email">Email *</label>
                            <input type="text" name="email" id="email" placeholder="Masukkan Tanggal lahir"
                                class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="password">Password *</label>
                            <input name="password" id="password" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="konfirmasi_password">Konfirmasi password *</label>
                            <input name="konfirmasi_password" id="konfirmasi_password" type="text"
                                placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('partner.submission') }}">
                            <button type="button"
                                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Ajukan
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
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

            // Hapus data
            $(document).on('click', '.hapus-data-categorylivestock', function() {
                const id = $(this).data('id');
                const token = localStorage.getItem('token-efarm');

                // console.log(token);

                confirm_dialog = confirm('Apakah yakin dihapus?');


                if (confirm_dialog) {
                    $.ajax({
                        url: '/api/categorylivestock/' + id,
                        type: "DELETE",
                        headers: {
                            "Authorization": token
                        },
                        success: function(data) {
                            if (data.message == 'success') {
                                alert('Data berhasil dihapus');
                                location.reload();
                            }
                        }
                    });
                }
            });

            // Edit data
            $(document).on('click', '.edit-data-categorylivestock', function(e) {
                $('.modal-edit-categorylivestock').removeClass('hidden');
                const id = $(this).data('id');
                console.log(id);
                const token = localStorage.getItem('token-efarm');

                $.get('/api/categorylivestock/' + id, function({
                    data
                }) {
                    // console.log(data.id);
                    console.log(data);
                    $('input[name="nama_kategori_hewan"]').val(data.nama_kategori_hewan);
                    $('textarea[name="deskripsi_kategori_hewan"]').val(data
                        .deskripsi_kategori_hewan);
                });

                $('.form-edit-categorylivestock').submit(function(e) {
                    e.preventDefault();
                    const form = $(this);
                    const token = localStorage.getItem('token-efarm');
                    var formData = new FormData(this);
                    console.log(formData);

                    $.ajax({
                        url: `/api/categorylivestock/${id}?_method=PUT`,
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        headers: {
                            "accept": "application/json",
                            "Authorization": token,
                            "Access-Control-Allow-Origin": "*"
                        },
                        success: function(data) {
                            if (data.success) {
                                alert('Data berhasil diubah');
                                location.reload();
                            }
                        }
                    })
                });
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


            $('.cancel-edit-data-categorylivestock').click(function(e) {
                // $('.modal-edit-categorylivestock').addClass('hidden');
                location.reload();
            });
        })
    </script>
</body>

</html>
