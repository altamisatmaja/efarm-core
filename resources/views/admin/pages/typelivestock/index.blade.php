@extends('admin.layouts.app')

@section('title', 'Dashboard | Typelivestock')

@section('content')
    <div class="w-full xl:w-4/12 px-4 mx-auto mt-24">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white ">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-blueGray-700">
                            List of Typelivestock
                        </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <a href="#modal-form-tambah" data-toggle="modal-tambah"
                            class="modal-tambah bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                            Tambah data
                        </a>
                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto">
                <table class="items-center w-full border-collapse text-blueGray-700  ">
                    <thead class="thead-light ">
                        <tr>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                No
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Nama
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                Deksripsi
                            </th>
                            <th
                                class="px-6 bg-blueGray-50 text-blueGray-700 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
                <form class="form-typelivestock" action="" method="POST">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                        <div class="md:col-span-2">
                            <label for="nama_jenis_hewan" class="float-left block  font-normal text-gray-400 text-lg">Nama
                                Jenis hewan</label>
                            <input type="text" id="nama_jenis_hewan" name="nama_jenis_hewan"
                                placeholder="Masukkan nama jenis hewan"
                                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                        </div>
                        <div class="md:col-span-2">
                            <label for="deskripsi_jenis_hewan"
                                class="float-left block  font-normal text-gray-400 text-lg">Deskripsi
                                Jenis hewan</label>
                            <textarea type="text" name="deskripsi_jenis_hewan" id="deskripsi_jenis_hewan" rows="5" cols=""
                                placeholder="Msukkan deskripsi"
                                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700"></textarea>
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
            <div class="flex flex-col px-6 py-5 bg-gray-50">
                <form class="form-typelivestock-update" action="" method="POST">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6">
                        <div class="md:col-span-2">
                            <label for="nama_jenis_hewan" class="float-left block font-normal text-gray-400 text-lg">Nama
                                Jenis Hewan</label>
                            <input type="text" id="nama_jenis_hewan" name="nama_jenis_hewan"
                                placeholder="Masukkan nama kategori"
                                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700">
                        </div>
                        <div class="md:col-span-2">
                            <label for="deskripsi_jenis_hewan"
                                class="float-left block  font-normal text-gray-400 text-lg">Deskripsi
                                Jenis Hewan</label>
                            <textarea type="text" name="deskripsi_jenis_hewan" id="deskripsi_jenis_hewan" rows="5" cols=""
                                placeholder="Msukkan deskripsi"
                                class="w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-700"></textarea>
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
    {{-- <a>/categorylivestock/edit/${val.id}</a> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(function() {
                $.ajax({
                    url: '/api/typelivestock',
                    success: function({
                        data
                    }) {
                        console.log(data);
                        // console.log(url);
                        let row = '';

                        data.map(function(val, index) {
                            row += `
                        <tr>
                            <td>${index+1}</td>
                            <td>${val.nama_jenis_hewan}</td>
                            <td>${val.deskripsi_jenis_hewan}</td>
                            <td>
                                <a href="#modal-form-ubah" data-id="${val.id}" data-toggle="modal" class="modal-ubah" id="modal-ubah">Edit</a>
                                <a href="#" data-id="${val.id}" id="delete-categorylivestock">Hapus</a>
                            </td>
                        </tr>
                        `;
                        });
                        $('tbody').append(row);
                    }
                })

                $(document).on('click', '#delete-categorylivestock', function() {
                    const id = $(this).data('id');
                    const token = localStorage.getItem('token-efarm');

                    // console.log(token);

                    confirm_dialog = confirm('Apakah yakin dihapus?');


                    if (confirm_dialog) {
                        $.ajax({
                            url: '/api/typelivestock/' + id,
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
                    // const token = localStorage.getItem('token-efarm');

                    // console.log(token);
                });

                $('.form-typelivestock').submit(function(e) {
                    e.preventDefault();
                    const form = $(this);
                    const token = localStorage.getItem('token-efarm');
                    var formData = new FormData(this);
                    console.log(formData);

                    $.ajax({
                        url: '/api/typelivestock',
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
                                alert('Data berhasil ditambahkan');
                                location.reload();
                            }
                        }
                    })
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

                    $.get('/api/typelivestock/' + id, function({
                        data
                    }) {
                        // console.log(data.id);
                        console.log(data);
                        $('input[name="nama_jenis_hewan"]').val(data.nama_jenis_hewan);
                        $('textarea[name="deskripsi_jenis_hewan"]').val(data
                            .deskripsi_jenis_hewan);
                    });

                    $('.form-typelivestock-update').submit(function(e) {
                        e.preventDefault();
                        const form = $(this);
                        const token = localStorage.getItem('token-efarm');
                        var formData = new FormData(this);
                        console.log(formData);

                        $.ajax({
                            url: `/api/typelivestock/${id}`,
                            type: 'PUT',
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
