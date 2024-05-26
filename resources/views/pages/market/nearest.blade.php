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
                    <div class="w-3/12 mr-8">
                        <div class="bg-white
        relative rounded-xl shadow-lg mb-6 px-4 py-4 mb-2">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full">
                                <span class="material-icons-outlined font-semibold  float-left">Kisaran harga</span>
                            </a>
                            <div class="h-px bg-black"></div>
                            <form action="">
                                <div class="flex flex-row my-2">
                                    <span
                                        class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0"
                                        mode="render" block="">
                                        Rp
                                    </span>
                                    <input value=""
                                        class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                        id="" name="" required="false" placeholder="50000">
                                </div>
                                <div class=" flex flex-row my-2">
                                    <span
                                        class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0"
                                        mode="render" block="">
                                        Rp
                                    </span>
                                    <input value=""
                                        class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                        id="" name="" required="false" placeholder="50000">
                                </div>

                                <a href="#"
                                    class="w-full block text-black justify-center flex font-medium text-lg py-2 mt-2 rounded-xl border border-1 border-white transition duration-200 ease-in-out hover:border hover:border-1 hover:border-solid hover:border-black hover:text-black">
                                    <button type="button">
                                        Batalkan filter
                                    </button>
                                </a>
                                <a href="#"
                                    class="w-full block bg-primarybase text-white justify-center flex font-medium text-lg py-2 mt-2 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-yellow-600 hover:text-white">
                                    <button type="button">
                                        Terapkan filter
                                    </button>
                                </a>
                            </form>
                        </div>
                    </div>


                    <main class="w-full">
                        <div class="container">
                            <div
                                class="nearest-product grid flex-wrap gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                                <div class="">
                                    <div class=" w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                        <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                            style="background-image: url('https://assets2.rumah-bumn.id/produk/product-16067182096361.jpg')">
                                            <p
                                                class="absolute right-2 top-2 bg-primarybase rounded-lg p-2 cursor-pointer group">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="24"
                                                    viewBox="0 -960 960 960" class="text-white" width="24">
                                                    <path fill="white"
                                                        d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                                </svg>
                                            </p>
                                        </div>

                                        <div class="px-5 py-3">
                                            <h3 class="text-gray-700 text-lg font-semibold">Kambing Jawa Asli</h3>
                                            <div>
                                                <h2 class="text-primarybase text-lg font-semibold">Rp 2.000.000</h2>
                                                <div class="flex gap-2">
                                                    <div class="px-4 py-1 rounded-md bg-primarybase">
                                                        <p class="text-white text-sm">Jantan</p>
                                                    </div>
                                                    <div class="px-4 py-1 rounded-md bg-primarybase">
                                                        <p class="text-white text-sm">Boer</p>
                                                    </div>
                                                </div>
                                                <p class="text-gray-700 text-md font-medium mt-4">Jawa Timur</p>
                                                <div class="flex items-center">
                                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <svg class="w-5 h-5 text-gray-300 dark:text-gray-500"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <p class="text-gray-700 text-sm font-medium">(3)</p>
                                                </div>
                                                <p class="text-gray-700 text-sm font-medium mb-4">200 Terjual</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                url: 'https://example.ai.ternakexpessindonesia.com/product/6.8899/109.3807/',
                method: 'GET',
                crossDomain: true,
                headers: {
                    "accept": "application/json",
                    "Access-Control-Allow-Origin": "*",
                },
                success: function(data) {
                    let row = '';
                    console.log(data);
                    data.map(function(val) {
                        row += `
                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                    <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                        style="background-image: url('/uploads/${val.gambar_hewan}')">
                        <p class="absolute right-2 top-2 bg-primarybase rounded-lg p-2 cursor-pointer group">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                class="text-white" width="24">
                                <path fill="white"
                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                            </svg>
                        </p>
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
                            <p class="text-gray-700 text-md font-medium mt-4">Jawa Timur</p>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <p class="text-gray-700 text-sm font-medium">(3)</p>
                            </div>
                            <p class="text-gray-700 text-sm font-medium mb-4">200 Terjual</p>
                        </div>
                    </div>
                </div>
                `;
                    });
                    $('.nearest-product').append(row);
                },
                error: function(xhr, status, error) {
                    let errorMessage = `
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden bg-red-100 p-4">
                        <h3 class="text-red-700 text-lg font-semibold">Error</h3>
                        <p class="text-red-700">An error occurred while fetching the product data. Please try again later.</p>
                    </div>
                `;
                    $('.nearest-product').append(errorMessage);
                    console.error("AJAX request failed:", error);

                }

            });
        });
    </script>
    @push('js')
    @endpush
@endsection
