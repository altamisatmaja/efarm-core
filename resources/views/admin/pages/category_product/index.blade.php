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
                            <h3 class="font-semibold text-base text-blueGray-700">Kategori Hewan</h3>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <button
                                class="tambah-data-categoryproduct bg-primarybase text-white active:bg-primarybase text-xs font-bold uppercase px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
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

    {{-- Modal tambah --}}
    <div class="hidden modal-tambah-categoryproduct">
        <div class="fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);">
            <div
                class="border border-teal-500 modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Tambah kategori produk</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="cancel-tambah-data-categoryproduct fill-current text-black"
                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <form class="form-tambah-categoryproduct" action="" method="POST">
                        <div class="mb-5">
                            <label for="nama_kategori_product" class="mb-3 block text-base font-medium text-[#07074D]">
                                Masukkan nama kategori hewan
                            </label>
                            <input type="nama_kategori_product" name="nama_kategori_product" id="nama_kategori_product"
                                placeholder="Kambing"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="mb-6 pt-4">
                            <label for="deskripsi_kategori_product" class="mb-3 block text-base font-medium text-[#07074D]">
                                Masukkan deskripsi kategori hewan
                            </label>
                            <textarea type="deskripsi_kategori_product" name="deskripsi_kategori_product" id="deskripsi_kategori_product"
                                placeholder="Kambing adalah lorem ipsum"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                        </div>

                        <div class="mb-6 pt-4">
                            <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                                Upload File
                            </label>

                            <div class="mb-8">
                                <input type="file" name="gambar_kategori_product" id="gambar_kategori_product" class="sr-only" />
                                <label for="gambar_kategori_product"
                                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                    <div>
                                        <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                            Drop files here
                                        </span>
                                        <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                            Or
                                        </span>
                                        <span
                                            class="inline-flex rounded py-2 px-7 text-base font-medium text-[#07074D]">
                                            Browse
                                        </span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="pb-4">
                            <button type="submit"
                                class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-black outline-none">
                                Simpan
                            </button>
                        </div>

                        <div class="pt-1">
                            <button type="button"
                                class="cancel-edit-form-categoryproduct hover:shadow-form w-full border hover:bg-primarybase hover:text-white border-primarybase rounded-md py-3 px-8 text-center text-base font-semibold text-primarybase">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal edit --}}
    <div class="hidden modal-edit-categoryproduct">
        <div class="fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);">
            <div
                class="border border-teal-500 modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Edit kategori produk</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="cancel-edit-data-categoryproduct fill-current text-black"
                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <form class="form-edit-categoryproduct" action="" method="POST">
                        <div class="mb-5">
                            <label for="nama_kategori_product" class="mb-3 block text-base font-medium text-[#07074D]">
                                Masukkan nama kategori hewan
                            </label>
                            <input type="nama_kategori_product" name="nama_kategori_product" id="nama_kategori_product"
                                placeholder="Kambing"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>

                        <div class="mb-6 pt-4">
                            <label for="deskripsi_kategori_product" class="mb-3 block text-base font-medium text-[#07074D]">
                                Masukkan deskripsi kategori hewan
                            </label>
                            <textarea type="deskripsi_kategori_product" name="deskripsi_kategori_product" id="deskripsi_kategori_product"
                                placeholder="Kambing adalah lorem ipsum"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                        </div>

                        <div class="mb-6 pt-4">
                            <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                                Upload File
                            </label>

                            <div class="mb-8 cursor-pointer">
                                <input type="file" name="gambar_kategori_product" id="gambar_kategori_product" class="sr-only" />
                                <label for="gambar_kategori_product"
                                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                    <div>
                                        <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                            Drop files here
                                        </span>
                                        <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                            Or
                                        </span>
                                        <span
                                            class="inline-flex rounded py-2 px-7 text-base font-medium text-[#07074D]">
                                            Browse
                                        </span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div class="pb-4">
                            <button type="submit"
                                class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-black outline-none">
                                Simpan
                            </button>
                        </div>

                        <div class="pt-1">
                            <button type="button"
                                class="cancel-edit-data-categoryproduct hover:shadow-form w-full border hover:bg-primarybase hover:text-white border-primarybase rounded-md py-3 px-8 text-center text-base font-semibold text-primarybase">
                                Batal
                            </button>
                        </div>
                    </form>
                </div>
            </div>
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
