@extends('admin.layouts.app')

@section('title', 'Admin | Partner')

@section('content')
<div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
    <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-xl font-bold leading-none text-gray-900">List kategori produk</h3>
            <a href="#"
                class="text-sm bg-primarybase font-medium text-white hover:bg-yellow-400 rounded-lg inline-flex items-center p-2">
                Tambah Data
            </a>
        </div>
        <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200">
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full"
                                src="https://demo.themesberg.com/windster/images/users/neil-sims.png"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                                Neil Sims
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="17727a767e7b57607e7973646372653974787a">[email&#160;protected]</a>
                            </p>
                        </div>
                        <div
                            class="inline-flex items-center text-base font-semibold text-gray-900">
                            $320
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full"
                                src="https://demo.themesberg.com/windster/images/users/bonnie-green.png"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                                Bonnie Green
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="d4b1b9b5bdb894a3bdbab0a7a0b1a6fab7bbb9">[email&#160;protected]</a>
                            </p>
                        </div>
                        <div
                            class="inline-flex items-center text-base font-semibold text-gray-900">
                            $3467
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full"
                                src="https://demo.themesberg.com/windster/images/users/michael-gough.png"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                                Michael Gough
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="57323a363e3b17203e3933242332257934383a">[email&#160;protected]</a>
                            </p>
                        </div>
                        <div
                            class="inline-flex items-center text-base font-semibold text-gray-900">
                            $67
                        </div>
                    </div>
                </li>
                <li class="py-3 sm:py-4">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full"
                                src="https://demo.themesberg.com/windster/images/users/thomas-lean.png"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                                Thomes Lean
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="284d45494144685f41464c5b5c4d5a064b4745">[email&#160;protected]</a>
                            </p>
                        </div>
                        <div
                            class="inline-flex items-center text-base font-semibold text-gray-900">
                            $2367
                        </div>
                    </div>
                </li>
                <li class="pt-3 sm:pt-4 pb-0">
                    <div class="flex items-center space-x-4">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8 rounded-full"
                                src="https://demo.themesberg.com/windster/images/users/lana-byrd.png"
                                alt="Neil image">
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-900 truncate">
                                Lana Byrd
                            </p>
                            <p class="text-sm text-gray-500 truncate">
                                <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="a2c7cfc3cbcee2d5cbccc6d1d6c7d08cc1cdcf">[email&#160;protected]</a>
                            </p>
                        </div>
                        <div
                            class="inline-flex items-center text-base font-semibold text-gray-900">
                            $367
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="flex items-center justify-between mt-6">
        <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>

            <span>
                previous
            </span>
        </a>

        <div class="items-center hidden md:flex gap-x-3">
            <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md bg-blue-100/60">1</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:text-gray-300 hover:bg-gray-100">2</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:text-gray-300 hover:bg-gray-100">3</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:text-gray-300 hover:bg-gray-100">...</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:text-gray-300 hover:bg-gray-100">12</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:text-gray-300 hover:bg-gray-100">13</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:text-gray-300 hover:bg-gray-100">14</a>
        </div>

        <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
            <span>
                Next
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(function() {
                // Read data
                $.ajax({
                    url: '/api/category',
                    success: function({
                        data
                    }) {
                        let row = '';

                        data.map(function(val, index) {
                            row += `
                            <tr>
                                <td style="text-align: center;">${index+1}</td>
                                <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap text-center">
                                    ${val.nama_kategori_product}
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap text-center">
                                    ${val.deskripsi_kategori_product}</td>
                                <td class="p-3 flex items-center justify-center">
                                    <div class="flex-shrink-0 rounded-lg overflow-hidden w-48 h-48">
                                        <img src="/uploads/${val.gambar_kategori_product}" class="w-full h-full object-cover" alt="">
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 text-sm font-normal text-gray-500">
                                    <div class="gap-x-3">
                                        <a data-id="${val.id}" data-toggle="modal" class="edit-data-categoryproduct cursor-pointer">Edit</a>
                                        <a class="hapus-data-categorylivestock cursor-pointer" data-id="${val.id}" class="ml-2" id="delete-categoryproduct">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            `;
                        });
                        $('tbody').append(row);
                    }
                })

                // Delete data
                $(document).on('click', '#delete-categoryproduct', function() {
                    const id = $(this).data('id');
                    const token = localStorage.getItem('token-efarm');

                    // console.log(token);

                    confirm_dialog = confirm('Apakah yakin dihapus?');

                    if (confirm_dialog) {
                        $.ajax({
                            url: '/api/category/' + id,
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

                $('.tambah-data-categoryproduct').click(function(e) {
                    $('.modal-tambah-categoryproduct').removeClass('hidden');
                });

                $('.form-tambah-categoryproduct').submit(function(e) {
                    e.preventDefault();
                    const form = $(this);
                    const token = localStorage.getItem('token-efarm');
                    var formData = new FormData(this);
                    console.log(formData);


                    $.ajax({
                        url: '/api/category',
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

                $('#gambar_kategori_product').click(function(e) {
                    e.stopPropagation();
                });

                $(document).on('click', '.cancel-tambah-data-categoryproduct', function() {
                    location.reload();
                });

                $(document).on('click', '.cancel-edit-data-categoryproduct', function() {
                    location.reload();
                });

                $(document).on('click', '.edit-data-categoryproduct', function() {
                    $('.modal-edit-categoryproduct').removeClass('hidden');
                    const id = $(this).data('id');
                    console.log(id);
                    const token = localStorage.getItem('token-efarm');

                    $.get('/api/category/' + id, function({
                        data
                    }) {
                        console.log(data.id);
                        console.log(data);
                        $('input[name="nama_kategori_product"]').val(data.nama_kategori_product);
                        $('textarea[name="deskripsi_kategori_product"]').val(data
                            .deskripsi_kategori_product);
                    });

                    $('.form-edit-categoryproduct').submit(function(e) {
                        e.preventDefault();
                        const form = $(this);
                        const token = localStorage.getItem('token-efarm');
                        var formData = new FormData(this);
                        console.log(formData);

                        $.ajax({
                            url: `/api/category/${id}?_method=PUT`,
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
            });
        </script>
    @endpush
@endsection