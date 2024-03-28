@extends('admin.layouts.app')

@section('title', 'Dashboard | Semua Product')

@section('content')
    <!-- component -->
    <section class="container px-4 mx-auto">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Product</h3>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="{{ route('admin.product.create') }}">
                                <button
                                    class="bg-primarybase text-white active:bg-primarybase text-xs font-bold uppercase px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">Tambah data</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Tanggal
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Nama Product
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Harga
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Diskon
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Gambar
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Nama Kategori
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Jenis Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Deskripsi
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Gender Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Umur
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Tags
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Berat
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Stok
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Terjual
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Partner
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-4 py-4 text-sm text-gray-500">1</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">2 Mei 2024</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">Kambing Jawa Ngawi</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                            <h2 class="text-sm font-normal">Rp 222222</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                            <h2 class="text-sm font-normal">Rp 0</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap align-middle">
                                        <div class="flex gap-1 flex-col items-center justify-center">
                                            <img class="object-cover w-14 h-14 rounded-lg"
                                                src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&q=80"
                                                alt="">
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        Kambing</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        Gibas</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur
                                        adipisicing elit. Quaerat rerum deserunt explicabo impedit sed est ullam doloremque
                                        commodi.</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        Jantan</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        2 tahun</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        Kurban</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        70 kg</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        4</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        3</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap align-middle">
                                        <div class="flex gap-1 flex-col items-center justify-center">
                                            <img class="object-cover w-8 h-8 rounded-lg"
                                                src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1344&q=80"
                                                alt="">
                                            <div>
                                                <p class="text-xs font-normal text-gray-600">Anis</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex flex-col items-center gap-x-6">
                                            <button
                                                class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Edit
                                            </button>

                                            <button
                                                class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Hapus
                                            </button>
                                        </div>
                                    </td>
                                </tr>
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
                <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md ">1</a>
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

    {{-- Modal edit --}}
    <div class="hidden modal-edit-product modal">
        <div class="fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);">
            <div
                class="border border-teal-500 modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Edit kategori hewan ternak</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="cancel-edit-data-product fill-current text-black"
                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <form class="form-edit-product" action="" method="POST">
                        <div class="mb-5">
                            <label for="nama_kategori_hewan" class="mb-3 block text-base font-medium text-[#07074D]">
                                Masukkan nama kategori hewan
                            </label>
                            <input type="nama_kategori_hewan" name="nama_kategori_hewan" id="nama_kategori_hewan"
                                placeholder="Kambing"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-6 pt-4">
                            <label for="deskripsi_kategori_hewan" class="mb-3 block text-base font-medium text-[#07074D]">
                                Masukkan deskripsi kategori hewan
                            </label>
                            <textarea type="deskripsi_kategori_hewan" name="deskripsi_kategori_hewan" id="deskripsi_kategori_hewan"
                                placeholder="Kambing adalah lorem ipsum"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>

                        </div>
                        <div class="pb-4">
                            <button
                                class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-black outline-none">
                                Simpan
                            </button>
                        </div>

                        <div class="pt-1">
                            <button
                                class="hover:shadow-form w-full border hover:bg-primarybase hover:text-white border-primarybase rounded-md py-3 px-8 text-center text-base font-semibold text-primarybase">
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
                    url: '/api/product',
                    success: function({
                        data
                    }) {
                        let row = '';

                        data.map(function(val, index) {
                            row += `
                            <tr>
                                    <td class="px-4 py-4 text-sm text-gray-500">${index+1}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">${val.created_at}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">${val.nama_product}</td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                            <h2 class="text-sm font-normal">Rp ${val.harga_product}</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div
                                            class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                            <h2 class="text-sm font-normal">Rp ${val.diskon}</h2>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap align-middle">
                                        <div class="flex gap-1 flex-col items-center justify-center">
                                            <img class="object-cover w-14 h-14 rounded-lg"
                                                src="/uploads/${val.gambar_hewan}"
                                                alt="">
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        ${val.categoryproduct[0].nama_kategori_product}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        ${val.typelivestocks[0].nama_jenis_hewan}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">${val.deskripsi_product}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        ${val.gender_livestocks[0].nama_gender}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        ${val.lahir_hewan} tahun</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        ${val.tags}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500">
                                        ${val.berat_hewan_ternak} kg</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        ${val.stok_hewan_ternak}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                        ${val.terjual}</td>
                                    <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap align-middle">
                                        <div class="flex gap-1 flex-col items-center justify-center">
                                            <img class="object-cover w-8 h-8 rounded-lg"
                                                src="/uploads/${val.partner[0].foto_profil}"
                                                alt="">
                                            <div>
                                                <p class="text-xs font-normal text-gray-600">${val.partner[0].nama_partner}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                        <div class="flex flex-col items-center gap-x-6">
                                            <a data-id="${val.id}" data-toggle="modal" class="edit-data-product cursor-pointer">
                                                <button
                                                    class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                    Edit
                                                </button>
                                            </a>
                                            <a class="hapus-data-product cursor-pointer" data-id="${val.id}" class="ml-2" id="delete-product">
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
                $(document).on('click', '.hapus-data-product', function() {
                    const id = $(this).data('id');
                    const token = localStorage.getItem('token-efarm');

                    // console.log(token);

                    confirm_dialog = confirm('Apakah yakin dihapus?');


                    if (confirm_dialog) {
                        $.ajax({
                            url: '/api/product/' + id,
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
                $(document).on('click', '.edit-data-product', function(e) {
                    $('.modal-edit-product').removeClass('hidden');
                    const id = $(this).data('id');
                    console.log(id);
                    const token = localStorage.getItem('token-efarm');

                    $.get('/api/product/' + id, function({
                        data
                    }) {
                        // console.log(data.id);
                        console.log(data);
                        $('input[name="nama_kategori_hewan"]').val(data.nama_kategori_hewan);
                        $('textarea[name="deskripsi_kategori_hewan"]').val(data
                            .deskripsi_kategori_hewan);
                    });

                    $('.form-edit-product').submit(function(e) {
                        e.preventDefault();
                        const form = $(this);
                        const token = localStorage.getItem('token-efarm');
                        var formData = new FormData(this);
                        console.log(formData);

                        $.ajax({
                            url: `/api/product/${id}?_method=PUT`,
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
                $('.form-tambah-product').submit(function(e) {
                    e.preventDefault();
                    const form = $(this);
                    const token = localStorage.getItem('token-efarm');
                    var formData = new FormData(this);
                    console.log(formData);


                    $.ajax({
                        url: '/api/product',
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


                $('.cancel-edit-data-product').click(function(e) {
                    // $('.modal-edit-product').addClass('hidden');
                    location.reload();
                });
            })
        </script>
    @endpush
@endsection
