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
    <title>eFarm | Market</title>
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
</head>

<body>
    <div>
        @include('includes.navbar')
        <div class="bg-white min-h-screen px-6">
            <main>
                <section class="relative z-10 bg-opacity-90 py-10">
                    <div class="container mx-auto flex flex-col lg:flex-row">
                        <div style="background-image: url('{{ asset('images/herofixed.png') }}')" class=" relative lg:w-2/3 rounded-xl bg-secondary-lite bg-cover p-8 md:p-16">
                            <p class="max-w-sm text-white text-3xl md:text-4xl font-semibold">Nikmati pembelian kambing tanpa ribet, cukup scan, dapat kambing</p>
                            <p class="max-w-xs pr-10 text-white font-semibold mt-8">Cari kambing terdekat Anda dan lakukan pembelian!</p>
                            <a href="" class="mt-20 flex bg-primarybase w-1/4 items-center justify-center text-white font-semibold py-2 rounded-md">Beli
                                sekarang</a>
                            <div class="absolute bottom-8 right-8 md:bottom-5 md:right-5 flex">
                               
                            </div>
                        </div>
                        <!-- right -->
                        <div style="background-image: url('{{ asset('images/herofixed.png') }}')" 
                            class=" lg:mt-0 relative md:mt-2 xs:mt-2 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
                            <div class="max-w-sm">
                                <p class="text-3xl md:text-4xl text-white font-bold">Hewan terdekat Anda</p>
                                <p class="mt-8 font-semibold text-white ">Untuk hewan qurban<br />Kambing atau sapi</p>
                                <a href="" class="absolute bottom-8 bg-primarybase text-white font-semibold px-8 py-2 rounded">Beli sekarang</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="container mx-auto pt-2 bg-white">
                    <div class="relative flex items-end font-bold">
                        <h2 class="text-2xl">Lihat berdasarkan jenis hewan</h2>
                    </div>
                    
                    <div class="grid xs:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full">
                    @foreach ($categorylivestock as $categorylivestocks)
                    <div class="relative mx-auto w-full">
                        <a href="{{ route('homepage.market.farm', $categorylivestocks->slug) }}"
                            class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">
                            <div class="shadow p-4 rounded-lg bg-white">
                                <div class="flex justify-center relative rounded-lg overflow-hidden h-52">
                                    <div class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full h-64 relative overflow-hidden">
                                        <div class="absolute inset-0">
                                            <img class="w-full h-full object-cover" src="/uploads/{{ $categorylivestocks->gambar_kategori_hewan }}" alt="" />
                                        </div>
                                    </div>
                                   
                                </div>

                                <div class="mt-4">
                                    <h2 class="font-semibold text-xl md:text-lg text-gray-800 line-clamp-1" title="New York">
                                        {{ $categorylivestocks->nama_kategori_hewan }}
                                    </h2>
                                </div>

                            </div>
                        </a>
                    </div> @endforeach 
                </div>
                
                <div class="relative
        flex items-end font-bold mt-6">
    <h2 class="text-2xl">Lihat berdasarkan kategori</h2>
    </div>

    <div class="grid lg:grid-cols-4 md:grid-cols-4 xs:grid-cols-1 gap-6 mt-4">
        @foreach ($categoryproduct as $categoryproducts)
            <div class="relative mx-auto w-full">
                <a href="{{ route('homepage.market.category', $categoryproducts->slug_kategori_product) }}"
                    class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">
                    <div class="shadow p-4 rounded-lg bg-white">
                        <div class="flex justify-center relative rounded-lg overflow-hidden h-52">
                            <div
                                class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full h-64 relative overflow-hidden">
                                <div class="absolute inset-0">
                                    <img class="w-full h-full object-cover"
                                        src="/uploads/{{ $categoryproducts->gambar_kategori_product }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <h2 class="font-semibold text-xl md:text-lg text-gray-800 line-clamp-1" title="New York">
                                {{ $categoryproducts->nama_kategori_product }}
                            </h2>
                        </div>

                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="relative
        flex items-end font-bold mt-6">
        <h2 class="text-2xl">Hewan terbaru</h2>
    </div>
    <main class="w-full">
        <div class="container">
            <div class="grid gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                @foreach ($products as $product)
                        <a href="/market/buy/{{ $product->slug_category_product }}/{{ $product->slug_category_livestock }}/{{ $product->slug_product }}">
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                style="background-image: url('/uploads/{{ $product->gambar_hewan }}')">
                            </div>

                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 text-lg font-semibold">{{ $product->nama_product }}</h3>
                                <div>
                                    <h2 class="text-primarybase text-lg font-semibold">Rp
                                        {{ number_format($product->harga_product) }}</h2>
                                    <div class="flex gap-2">
                                        <div class="px-2 py-1 rounded-md bg-primarybase">
                                            <p class="text-white text-sm">
                                                {{ $product->gender }}
                                            </p>
                                        </div>
                                        <div class="px-2 py-1 rounded-md bg-primarybase">
                                            <p class="text-white text-sm">{{ $product->nama_jenis_hewan }}</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-700 text-md font-medium mt-4">{{ $product->lokasi }}</p>
                                    <div class="flex items-center">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $product->average_rating)
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            @else
                                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                            @endif @endfor
                                        <p class="text-gray-700 text-sm font-medium">({{ $product->total_reviews ?? 0 }})</p>
                                    </div>
                                    <p class="text-gray-700 text-sm font-medium mb-4">{{ $product->terjual }} Terjual</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
    </div>
    </main>
    </section>
    </div>
    </div>
    <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
    </body>

</html>
