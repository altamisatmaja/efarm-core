<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>

@extends('admin.layouts.app')

@section('title', 'Dashboard | Category')

@section('content')
    <section class="w-full px-4 mx-auto">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                {{-- ignored really --}}
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Kategori Jenis Hewan</h3>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <button
                                class="tambah-data-categorylivestock bg-primarybase text-white active:bg-primarybase text-xs font-bold uppercase px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Tambah data</button>
                        </div>
                    </div>
                </div>
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>No</span>

                                                <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path
                                                        d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path
                                                        d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="py-3 text-sm font-normal  text-gray-500 ">
                                        Nama kategori hewan ternak
                                    </th>
                                    <th scope="col"
                                        class="py-3 text-sm font-normal  text-gray-500 ">
                                        Gambar kategori hewan ternak
                                    </th>
                                    <th scope="col"
                                        class="py-3 text-sm font-normal  text-gray-500 ">
                                        Deskripsi kategori hewan ternak
                                    </th>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <div class="items-center hidden md:flex gap-x-3">
                <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md bg-blue-100/60">1</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">2</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">3</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">...</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">12</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">13</a>
                <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md hover:bg-gray-100">14</a>
            </div>

            <a href="#"
                class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </section>

    {{-- component for modal tambah --}}
    <div id="modal-form-tambah"
        class="hidden modal-tambah fixed inset-0 z-50 overflow-auto bg-white/40 bg-opacity-50 backdrop-blur-md flex items-center justify-center">
        <div
            class="flex invisible flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl">
            <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                <p class="font-semibold text-gray-800">Tambah kategori</p>
                <svg class="w-6 h-6 cursor-pointer cancel-tambah" id="cancel-tambah" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
            <div class="flex flex-col px-6 py-5 bg-gray-50">
                <form class="form-kategori" action="" method="POST">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                        <div class="md:col-span-2">
                            <label for="nama_kategori_product"
                                class="float-left block  font-normal text-gray-400 text-lg">Nama
                                Kategori</label>
                            <input type="text" id="nama_kategori_product" name="nama_kategori_product"
                                placeholder="Masukkan nama kategori"
                                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                        </div>
                        <div class="md:col-span-2">
                            <label for="deskripsi_kategori_product"
                                class="float-left block  font-normal text-gray-400 text-lg">Nama
                                Kategori</label>
                            <textarea type="text" name="deskripsi_kategori_product" id="deskripsi_kategori_product" rows="5"
                                cols="" placeholder="Msukkan deskripsi"
                                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700"></textarea>
                        </div>
                        <div class="md:col-span-2">
                            <label for="gambar_kategori_product"
                                class="float-left block  font-normal text-gray-400 text-lg">Pilih
                                gambar</label>
                            <input type="file" id="gambar_kategori_product" name="gambar_kategori_product"
                                placeholder=""
                                class="peer block w-full appearance-none border-none   bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0">
                        </div>
                        <div class="md:col-span-2">
                            <button type="submit" id="button-submit"
                                class="middle none center mr-3 w-full rounded-lg border hover:bg-primarybase hover:text-white border-primarybase py-2.5 px-9 font-sans text-xs font-bold uppercase text-primarybase transition-all focus:ring focus:ring-primarybase active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-dark="true">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- component for modal ubah --}}
    <div id="modal-form-ubah"
        class="hidden modal-form-ubah fixed inset-0 z-50 overflow-auto bg-white/40 bg-opacity-50 backdrop-blur-md flex items-center justify-center">
        <div
            class="flex invisible flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl">
            <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                <p class="font-semibold text-gray-800">Ubah kategori</p>
                <svg class="w-6 h-6 cursor-pointer cancelubah" id="cancelubah" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </div>
            <div class="flex flex-col px-6 py-5 bg-gray-50">
                <form class="form-kategori-update" action="" method="POST">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                        <div class="md:col-span-2">
                            <label for="nama_kategori_product"
                                class="float-left block font-normal text-gray-400 text-lg">Nama
                                Kategori</label>
                            <input type="text" id="nama_kategori_product" name="nama_kategori_product"
                                placeholder="Masukkan nama kategori"
                                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                        </div>
                        <div class="md:col-span-2">
                            <label for="deskripsi_kategori_product"
                                class="float-left block  font-normal text-gray-400 text-lg">Nama
                                Kategori</label>
                            <textarea type="text" name="deskripsi_kategori_product" id="deskripsi_kategori_product" rows="5"
                                cols="" placeholder="Msukkan deskripsi"
                                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700"></textarea>
                        </div>
                        <div class="md:col-span-2">
                            <label for="gambar_kategori_product"
                                class="float-left block  font-normal text-gray-400 text-lg">Pilih
                                gambar</label>
                            <input type="file" id="gambar_kategori_product" name="gambar_kategori_product"
                                placeholder=""
                                class="peer block w-full appearance-none border-none   bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0">
                        </div>
                        <div class="md:col-span-2">
                            <button type="submit" id="button-submit-edit"
                                class="middle none center mr-3 w-full rounded-lg border hover:bg-primarybase hover:text-white border-primarybase py-2.5 px-9 font-sans text-xs font-bold uppercase text-primarybase transition-all focus:ring focus:ring-primarybase active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                data-ripple-dark="true">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <a>/category/edit/${val.id}</a> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(function() {
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
                                    <div class="flex-shrink-0 rounded-lg overflow-hidden w-1/2 h-1/2">
                                        <img src="/uploads/${val.gambar_kategori_product}" class="w-full h-full object-cover" alt="">
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                                    <div class="flex items-center gap-x-3">
                                        <a href="#modal-form-ubah" data-id="${val.id}" data-toggle="modal" class="modal-ubah">Edit</a>
                                        <a href="#" data-id="${val.id}" class="ml-2" id="delete-category">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                            `;
                        });
                        $('tbody').append(row);
                    }
                })

                $(document).on('click', '#delete-category', function() {
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

                $('.modal-tambah').click(function(e) {
                    $('#modal-form-tambah').removeClass('hidden');
                });

                $('.form-kategori').submit(function(e) {
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

                $('#button-submit').click(function(e) {
                    e.stopPropagation();
                });

                $('#button-submit-edit').click(function(e) {
                    e.stopPropagation();
                });

                $(document).on('click', '#cancel-tambah', function() {
                    location.reload();
                });

                $(document).on('click', '.modal-ubah', function() {
                    $('#modal-form-ubah').removeClass('hidden');
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

                    $('.form-kategori-update').submit(function(e) {
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

                $('#cancelubah').click(function(e) {
                    e.preventDefault();
                    location.reload();
                });
            });
        </script>
    @endpush
@endsection
