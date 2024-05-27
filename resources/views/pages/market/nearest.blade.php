@extends('includes.app')

@section('title', 'eFarm | Terdekat')

@section('content')
    <style>
        * {
            font-family: Montserrat;
        }

        .text-primary {
            color: #f9b529;
        }

        .text-primary-lite {
            color: #fac251;
        }

        .text-secondary {
            color: #294356;
        }

        .text-secondary-lite {
            color: #d5dee5;
        }

        .bg-primary {
            background-color: #f9b529;
        }

        .bg-primary-lite {
            background-color: #fac251;
        }

        .bg-secondary {
            background-color: #294356;
        }

        .bg-secondary-lite {
            background-color: #d5dee5;
        }

        .product {
            background-image: url('https://i.ibb.co/L00dH6V/2021-11-07-14h07-51.png');
        }

        .product2 {
            background-image: url('https://i.ibb.co/1fZMKPh/2021-11-07-14h08-07.png');
        }

        .product3 {
            background-image: url('https://i.ibb.co/f9tpvV3/2021-11-07-14h08-32.png');
        }

        .product4 {
            background-image: url('https://i.ibb.co/42BsKQ2/2021-11-07-14h08-17.png');
        }
    </style>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <div>
        <div class="bg-white min-h-screen">
            <div class="flex mx-auto justify-center">
                <div class="flex flex-row pt-6 px-6 pb-4">

                    <main class="w-full">
                        <div class="container">
                            <div
                                class="nearest-product grid flex-wrap gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">

                            </div>
                            <div class="" id="error-nearest-product">

                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
    <script>
        $(function() {
    $.ajax({
        url: 'https://example.ai.ternakexpessindonesia.com/product/{{ $latitude }}/{{ $longitude }}/',
        method: 'GET',
        crossDomain: true,
        headers: {
            "accept": "application/json",
            "Access-Control-Allow-Origin": "*",
        },
        success: function(data) {
            let row = '';
            console.log(data);
            data.forEach(function(val) {
                row += `
                <a href="/market/buy/${val.categoryproduct[0].slug_kategori_product}/${val.categorylivestocks[0].slug}/${val.slug_product}">
                    <div class="cursor-pointer w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                            style="background-image: url('/uploads/${val.gambar_hewan}')">
                        </div>

                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 text-lg font-semibold">${val.nama_product}</h3>
                            <div>
                                <h2 class="text-primarybase text-lg font-semibold">Rp ${val.harga_product}</h2>
                                <div class="flex gap-2">
                                    <div class="px-4 py-1 rounded-md bg-primarybase">
                                        <p class="text-white text-sm">${val.typelivestocks[0].nama_jenis_hewan}</p>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-md font-medium mt-4">${val.partner[0].kabupaten_partner}</p>
                                <p class="text-gray-700 text-sm font-medium mb-4">${val.terjual} Terjual</p>
                            </div>
                        </div>
                    </div>
                </a>
                `;
            });
            $('.nearest-product').append(row);
        },
        error: function(xhr, status, error) {
            let errorMessage = `
                <div class="flex items-center h-screen -mt-32 justify-center flex-col">
                    <h3 class="flex text-6xl font-bold items-center justify-center text-textbase">Ups 🤭</h3>
                    <p class="flex text-xl font-semibold my-2 items-center justify-center text-textbase">
                        Gagal mendapatkan data produk, mohon aktifkan lokasi anda</p>
                    <button onclick="return location.reload()" class="mt-4 px-4 py-2 bg-primarybase text-white font-semibold rounded-lg shadow-md hover:bg-primarydarker focus:outline-none focus:ring-2 focus:ring-primarylight focus:ring-opacity-75" onclick="enableLocation()">
                        Aktifkan Lokasi
                    </button>
                </div>
            `;
            $('#error-nearest-product').append(errorMessage);
            console.error("AJAX request failed:", error);
        }
    });
});

    </script>
    @push('js')
    @endpush
@endsection
