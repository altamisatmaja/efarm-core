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
                                        <p class="text-white text-sm">Jantan</p>
                                    </div>
                                    <div class="px-4 py-1 rounded-md bg-primarybase">
                                        <p class="text-white text-sm">Boer</p>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-md font-medium mt-4">${val.nama_kategori_hewan}</p>
                                <div class="flex items-center">`;

                // Adding rating stars
                for (let i = 0; i < val.rating; i++) {
                    row += `<svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>`;
                }

                row += `
                                    <p class="text-gray-700 text-sm font-medium">(${val.rating})</p>
                                </div>
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
                    <button class="mt-4 px-4 py-2 bg-primarybase text-white font-semibold rounded-lg shadow-md hover:bg-primarydarker focus:outline-none focus:ring-2 focus:ring-primarylight focus:ring-opacity-75" onclick="enableLocation()">
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
