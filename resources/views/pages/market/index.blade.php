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
                            <button class="mt-20 bg-primarybase text-white font-semibold px-8 py-2 rounded-md">Beli
                                sekarang</button>
                            <div class="absolute bottom-8 right-8 md:bottom-5 md:right-5 flex">
                               
                            </div>
                        </div>
                        <!-- right -->
                        <div style="background-image: url('{{ asset('images/herofixed.png') }}')" 
                            class=" lg:mt-0 relative md:mt-2 xs:mt-2 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
                            <div class="max-w-sm">
                                <p class="text-3xl md:text-4xl text-white font-bold">Hewan terdekat Anda</p>
                                <p class="mt-8 font-semibold text-white ">Untuk hewan qurban<br />Kambing atau sapi</p>
                                <button class="absolute bottom-8 bg-primarybase text-white font-semibold px-8 py-2 rounded">Beli sekarang</button>
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
                                    {{-- <div class="absolute flex justify-center bottom-0 mb-3">
                                        <div class="flex bg-white px-4 py-1 space-x-5 rounded-lg overflow-hidden shadow">
                                            <p class="flex items-center font-medium text-gray-800">
                                                <svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M480,226.15V80a48,48,0,0,0-48-48H80A48,48,0,0,0,32,80V226.15C13.74,231,0,246.89,0,266.67V472a8,8,0,0,0,8,8H24a8,8,0,0,0,8-8V416H480v56a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V266.67C512,246.89,498.26,231,480,226.15ZM64,192a32,32,0,0,1,32-32H208a32,32,0,0,1,32,32v32H64Zm384,32H272V192a32,32,0,0,1,32-32H416a32,32,0,0,1,32,32ZM80,64H432a16,16,0,0,1,16,16v56.9a63.27,63.27,0,0,0-32-8.9H304a63.9,63.9,0,0,0-48,21.71A63.9,63.9,0,0,0,208,128H96a63.27,63.27,0,0,0-32,8.9V80A16,16,0,0,1,80,64ZM32,384V266.67A10.69,10.69,0,0,1,42.67,256H469.33A10.69,10.69,0,0,1,480,266.67V384Z">
                                                    </path>
                                                </svg>
                                                3 + 1
                                            </p>

                                            <p class="flex items-center font-medium text-gray-800">
                                                <svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 480 512">
                                                    <path
                                                        d="M423.18 195.81l-24.94-76.58C387.51 86.29 356.81 64 322.17 64H157.83c-34.64 0-65.34 22.29-76.07 55.22L56.82 195.8C24.02 205.79 0 235.92 0 271.99V400c0 26.47 21.53 48 48 48h16c26.47 0 48-21.53 48-48v-16h256v16c0 26.47 21.53 48 48 48h16c26.47 0 48-21.53 48-48V271.99c0-36.07-24.02-66.2-56.82-76.18zm-310.99-66.67c6.46-19.82 24.8-33.14 45.64-33.14h164.34c20.84 0 39.18 13.32 45.64 33.13l20.47 62.85H91.72l20.47-62.84zM80 400c0 8.83-7.19 16-16 16H48c-8.81 0-16-7.17-16-16v-16h48v16zm368 0c0 8.83-7.19 16-16 16h-16c-8.81 0-16-7.17-16-16v-16h48v16zm0-80.01v32H32v-80c0-26.47 21.53-48 48-48h320c26.47 0 48 21.53 48 48v48zM104.8 248C78.84 248 60 264.8 60 287.95c0 23.15 18.84 39.95 44.8 39.95l10.14.1c39.21 0 45.06-20.1 45.06-32.08 0-24.68-31.1-47.92-55.2-47.92zm10.14 56c-3.51 0-7.02-.1-10.14-.1-12.48 0-20.8-6.38-20.8-15.95S92.32 272 104.8 272s31.2 14.36 31.2 23.93c0 7.17-10.53 8.07-21.06 8.07zm260.26-56c-24.1 0-55.2 23.24-55.2 47.93 0 11.98 5.85 32.08 45.06 32.08l10.14-.1c25.96 0 44.8-16.8 44.8-39.95 0-23.16-18.84-39.96-44.8-39.96zm0 55.9c-3.12 0-6.63.1-10.14.1-10.53 0-21.06-.9-21.06-8.07 0-9.57 18.72-23.93 31.2-23.93s20.8 6.38 20.8 15.95-8.32 15.95-20.8 15.95z">
                                                    </path>
                                                </svg>
                                                2
                                            </p>

                                            <p class="flex items-center font-medium text-gray-800">
                                                <svg class="w-5 h-5 fill-current mr-2" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M504,256H64V61.25a29.26,29.26,0,0,1,49.94-20.69L139.18,65.8A71.49,71.49,0,0,0,128,104c0,20.3,8.8,38.21,22.34,51.26L138.58,167a8,8,0,0,0,0,11.31l11.31,11.32a8,8,0,0,0,11.32,0L285.66,65.21a8,8,0,0,0,0-11.32L274.34,42.58a8,8,0,0,0-11.31,0L251.26,54.34C238.21,40.8,220.3,32,200,32a71.44,71.44,0,0,0-38.2,11.18L136.56,18A61.24,61.24,0,0,0,32,61.25V256H8a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H32v96c0,41.74,26.8,76.9,64,90.12V504a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V480H384v24a8,8,0,0,0,8,8h16a8,8,0,0,0,8-8V474.12c37.2-13.22,64-48.38,64-90.12V288h24a8,8,0,0,0,8-8V264A8,8,0,0,0,504,256ZM228.71,76.9,172.9,132.71A38.67,38.67,0,0,1,160,104a40,40,0,0,1,40-40A38.67,38.67,0,0,1,228.71,76.9ZM448,384a64.07,64.07,0,0,1-64,64H128a64.07,64.07,0,0,1-64-64V288H448Z">
                                                    </path>
                                                </svg>
                                                3
                                            </p>
                                        </div>
                                    </div> --}}
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
    <main class="w-full mt-6">
        <div class="container">
            <div class="grid gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                @foreach ($product as $products)
                    @php
                        $categorySlug = $products->categoryproduct->first()->slug_kategori_product;
                        $categorylivestockSlug = $products->categorylivestocks->first()->slug;
                        $productSlug = $products->slug_product;
                    @endphp

                    <a
                        href="{{ route('homepage.market.farm.product', [$categorySlug, $categorylivestockSlug, $productSlug]) }}">
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                style="background-image: url('https://assets2.rumah-bumn.id/produk/product-16067182096361.jpg')">
                                <p class="absolute right-2 top-2 bg-primarybase rounded-lg p-2 cursor-pointer group">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                        class="text-white" width="24">
                                        <path fill="white"
                                            d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                    </svg>
                                </p>
                            </div>

                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 text-lg font-semibold">{{ $products->nama_product }}</h3>
                                <div>
                                    <h2 class="text-primarybase text-lg font-semibold">@currency($products->harga_product)</h2>
                                    <div class="flex gap-2">
                                        <div class="px-4 py-1 rounded-md bg-primarybase">
                                            @foreach ($products->gender_livestocks as $genderlivestocks)
                                                <p class="text-white text-sm">{{ $genderlivestocks->nama_gender }}</p>
                                            @endforeach
                                        </div>
                                        <div class="px-4 py-1 rounded-md bg-primarybase">
                                            @foreach ($products->typelivestocks as $livestock)
                                                <p class="text-white text-sm">{{ $livestock->nama_jenis_hewan }}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                    @foreach ($products->partner as $partners)
                                        <p class="text-gray-700 text-md font-medium mt-4">
                                            {{ $partners->provinsi_partner }}</p>
                                    @endforeach
                                    <div class="flex items-center">
                                        @if ($products->reviews->isEmpty())
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-5 h-5 text-gray-400 fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @else
                                            @foreach ($products->reviews as $review)
                                                @php
                                                    $rating = $review->rating;
                                                    echo $rating;
                                                    $total_rating = 0;

                                                    $total_rating += $review->rating;
                                                @endphp
                                                <div>
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($rating >= $i)
                                                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                </path>
                                                            </svg>
                                                        @else
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="w-5 h-5 text-gray-400 fill-current"
                                                                viewBox="0 0 20 20">
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </div>
                                            @endforeach
                                        @endif
                                        <p class="text-gray-700 text-sm font-medium">(3)</p>
                                    </div>
                                    <p class="text-gray-700 text-sm font-medium mb-4">200 Terjual</p>
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
