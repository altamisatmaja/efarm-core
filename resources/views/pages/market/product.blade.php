<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>eFarm | Market</title>
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-number-input input:focus {
            outline: none !important;
        }

        .custom-number-input button:focus {
            outline: none !important;
        }

        .carousel-cell {
            width: 150px;
            height: 150px;

            margin-right: 24px;
            counter-increment: carousel-cell;
        }

        .carousel-cell:before {
            display: block;
            width: 20%;
        }

        .flickity-slider {
            position: absolute;
            width: 100%;
            height: 100%;
            left: -260px !important;
        }

        .flickity-button {
            position: absolute !important;
            inset: 0 !important;
            top: 50% !important;
            left: 80% !important;
            background: white;
            border: 0px;
            color: #27272a;
        }

        .flickity-prev-next-button:hover {
            background-color: #27272a;
            color: white;
        }

        .flickity-prev-next-button.previous {
            visibility: hidden;
        }

        .flickity-prev-next-button.next {
            margin-left: 50px;
            width: 48px;
            height: 48px;
            visibility: hidden;
        }

        .flickity-enabled.is-draggable .flickity-viewport {
            cursor: none;
            cursor: default;
        }

        .flickity-prev-next-button .flickity-button-icon {
            margin-left: 2px;
            margin-top: 2px;
            width: 24px;
            height: 24px;
        }
    </style>
    <script>
        let menu = document.getElementById("menu");
        let closeIcon = document.getElementById("closeIcon");
        let openIcon = document.getElementById("openIcon");
        const showMenu = (flag) => {
            if (flag) {
                menu.classList.toggle("hidden");
                closeIcon.classList.toggle("hidden");
                openIcon.classList.toggle("hidden");
            }
        };

        let menu2 = document.getElementById("menu2");
        let closeIcon2 = document.getElementById("closeIcon2");
        let openIcon2 = document.getElementById("openIcon2");
        const showMenu2 = (flag) => {
            if (flag) {
                menu2.classList.toggle("hidden");
                closeIcon2.classList.toggle("hidden");
                openIcon2.classList.toggle("hidden");
            }
        };

        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value--;
            target.value = value;
        }

        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value++;
            target.value = value;
        }

        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );

        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });
    </script>
</head>

<body class="antialiased">
    <div>
        @include('includes.navbar')

        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="#" class="hover:underline hover:text-gray-600">Market</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <a href="#" class="hover:underline hover:text-gray-600">Hewan Ternak</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Kambing</span>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Hewan Jawa</span>
                </div>
            </div>
            <div>

            </div>
            @foreach ($product as $products)
            @endforeach
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="flex flex-col md:flex-row -mx-4">

                    {{-- for image --}}
                    <div class="lg:w-4/12 md:w-4/12 sm:w-full bg-white">
                        <div class="py-2 pl-8 pr-10 space-y-3 sticky top-0">
                            <div class="md:flex-1 px-4">
                                <div x-data="{ image: 1 }" x-cloak>
                                    <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                                        <div x-show="image === 1"
                                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                            <span class="text-5xl">1</span>
                                        </div>

                                        <div x-show="image === 2"
                                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                            <span class="text-5xl">2</span>
                                        </div>

                                        <div x-show="image === 3"
                                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                            <span class="text-5xl">3</span>
                                        </div>

                                        <div x-show="image === 4"
                                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                                            <span class="text-5xl">4</span>
                                        </div>
                                    </div>

                                    <div class="flex -mx-2 mb-4">
                                        <template x-for="i in 4">
                                            <div class="flex-1 px-2">
                                                <button x-on:click="image = i"
                                                    :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                                    class="focus:outline-none w-full rounded-lg h-20 md:h-20 bg-gray-100 flex items-center justify-center">
                                                    <span x-text="i" class="text-2xl"></span>
                                                </button>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- for product  --}}
                    <div class="md:flex-1 px-4">

                        <h2 class="mb-2 leading-tight pt-2 tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                            {{ $products->nama_product }}</h2>
                        <div class="flex justify-between item-center">
                            <p class="text-gray-500 font-medium hidden md:block">Kambing</p>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <p class="text-gray-600 font-bold text-sm ml-1">
                                    4.96
                                    <span class="text-gray-500 font-normal">(76 reviews)</span>
                                </p>
                            </div>
                            <div
                                class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                                100 Terjual</div>
                        </div>
                        <div class="flex items-center space-x-4 my-4">
                            <div>
                                <div class="rounded-lg flex py-2 px-3">
                                    <span class="text-indigo-400 mr-1 mt-1">Rp</span>
                                    <span
                                        class="font-bold text-primarybase text-3xl">{{ $products->harga_product }}</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-green-500 text-xl font-semibold">Diskon 12%</p>
                                <p class="text-gray-400 line-through text-sm">Rp 2.222.222</p>
                            </div>
                        </div>
                        <div class="max-w-4xl bg-white w-full rounded-lg">
                            <div class="">
                                <h2 class="text-2xl ">
                                    Detail hewan
                                </h2>
                            </div>
                            <div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Gender hewan
                                    </p>
                                    <p>
                                        Jantan
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Usia hewan
                                    </p>
                                    <p>
                                        11 Bulan
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Berat hewan
                                    </p>
                                    <p>
                                        100 kg
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Stok
                                    </p>
                                    <p>
                                        22 ekor
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Deskripsi
                                    <p class="text-gray-500">{{ $products->deskripsi_product }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-px  bg-slate-400"></div>
                        </div>
                        <div class="max-w-4xl bg-white w-full rounded-lg">
                            <div class="">
                                <h2 class="text-2xl ">
                                    Pengiriman
                                </h2>
                            </div>
                            <div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Dikirim dari
                                    </p>
                                    <p>
                                        KAB. JAKARTA
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Melalui
                                    </p>
                                    <p>
                                        Internal Kontaner
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-px  bg-slate-400"></div>
                        </div>
                        <div class="sm:flex sm:justify-between py-2">
                            <div class="flex items-center">
                                <div class="flex items-start justify-start">
                                    <img class="h-12 w-12 rounded-full"
                                        src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g"
                                        alt="">
                                    <div class="ml-2 flex flex-col">
                                        <h3 class="text-lg text-gray-800 font-medium">Pak Aji</h3>
                                        <span class="text-gray-600">Peternakan pak aji</span>
                                        <span class="text-gray-600">Lokasi pak ajiadadadadadadaddaadadada</span>
                                        <div
                                            class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                            <p class="text-gray-600 w-full">Bergabung pada 2021</p>
                                            <p class="w-full">Peternakan 2 Tahun berdiri</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-2 sm:mt-0">
                                <button
                                    class="flex items-center text-white bg-blue-600 rounded px-2 py-1 hover:bg-blue-500 focus:outline-none focus:shadow-outline">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span class="ml-1 text-sm">hubungi</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-px  bg-slate-400"></div>
                        </div>
                    </div>



                    {{-- for checkout --}}
                    <div class="w-full md:w-4/12 bg-white md:block mb-2">
                        <div class="py-2 pl-8 pr-10 space-y-3 sticky top-0">
                            <div class="h-full rounded-lg border bg-white p-6 shadow-md md:mt-0">
                                <div class="mb-2 flex justify-between">
                                    <p class="text-gray-700 text-xl font-semibold">Atur jumlah dan catatan</p>
                                </div>
                                <hr class="my-4" />
                                <p>Atur kuantitas</p>
                                <div class="mb-2 flex justify-between">
                                    <div class="custom-number-input h-10 w-32">
                                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                            <button data-action="decrement"
                                                class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                <span class="m-auto text-2xl font-thin">−</span>
                                            </button>
                                            <input type="number"
                                                class="focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                                name="custom-input-number" value="0"></input>
                                            <button data-action="increment"
                                                class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                <span class="m-auto text-2xl font-thin">+</span>
                                            </button>
                                        </div>
                                    </div>
                                    <p class="text-gray-700">Stok 2222</p>
                                </div>

                                <div class="mb-2 flex justify-between">
                                    <p class="text-gray-700">Subtotal</p>
                                    <p class="text-gray-700">Rp.222.2222.22</p>
                                </div>
                                <hr class="my-4" />
                                <button
                                    class="mt-3 hover:shadow-form w-full border hover:bg-primarybase hover:text-white border-primarybase rounded-md py-3 px-8 text-center text-base font-semibold text-primarybase">
                                    Tambah ke keranjang
                                </button>
                                <button
                                    class="mt-3 hover:shadow-form w-full border bg-primarybase hover:bg-primarybase hover:text-white border-white rounded-md py-3 px-8 text-center text-base font-semibold text-white">
                                    Beli sekarang
                                </button>
                                <div class="grid grid-cols-2 divide-x mt-2">
                                    <div class="flex items-center justify-center">Chat</div>
                                    <div class="flex items-center justify-center">Share</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- component -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                <div class="flex flex-col justify-start items-start w-full">
                    <div class="p-8 flex text-2xl font-semibold">
                        <h1>Testimoni dari pembeli lain</h1>
                    </div>
                    <div class="w-full flex justify-start items-start flex-col px-8 pb-4">
                        <div class="flex justify-between w-full">
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
                                <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                    <p class="ml-2 text-sm leading-none text-gray-600 ">(4)</p>
                                </svg>
                            </div>
                            <p class="ml-3 text-sm leading-none text-gray-600 ">14 July 2021</p>
                        </div>

                        <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                            <div>
                                <img src="https://randomuser.me/api/portraits/men/12.jpg"
                                    class="w-auto h-10 rounded-full" alt="fotoprofil" />
                            </div>
                            <div class="flex flex-col justify-start items-start space-y-2">
                                <p class="text-base font-medium leading-none text-gray-800 ">a***4</p>
                            </div>
                        </div>
                        <p class="text-xl md:text-2xl mt-2 font-medium leading-normal text-gray-800">Kambingnya sehat
                            dan mantap</p>
                        <div id="menu" class="md:block">
                            <p class="mt-3 text-base leading-normal text-gray-600  w-full md:w-9/12 xl:w-5/6">
                                When you want to decorate your home, the idea of choosing a decorative theme can seem
                                daunting. Some themes seem to have an endless amount of pieces, while others can feel
                                hard to accomplish</p>
                            <div class="hidden md:flex mt-6 flex-row justify-start items-start space-x-4">
                                <div class="">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                        alt="chair-1" />
                                </div>
                            </div>
                            <div class="md:hidden carousel pt-8 cursor-none"
                                data-flickity='{ "wrapAround": true,"pageDots": false }'>
                                <div class="carousel-cell">
                                    <div class="md:w-full h-full relative">
                                        <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                            alt="bag" class="w-full h-full object-fit object-cover" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="flex px-8 flex-col">
                    <div class="h-px w-full bg-slate-400"></div>
                </div>
                <div class="flex flex-col justify-start items-start w-full space-y-8">
                    <div class="w-full flex justify-start items-start flex-col p-8">
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
                            <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                                <p class="ml-3 text-sm leading-none text-gray-600 ">14 July 2021</p>
                            </svg>
                        </div>
                        <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                            <div>
                                <img src="https://randomuser.me/api/portraits/men/12.jpg"
                                    class="w-auto h-10 rounded-full" alt="fotoprofil" />
                            </div>
                            <div class="flex flex-col justify-start items-start space-y-2">
                                <p class="text-base font-medium leading-none text-gray-800 ">a***4</p>
                            </div>
                        </div>
                        <p class="text-xl md:text-2xl mt-2 font-medium leading-normal text-gray-800">Kambingnya sehat
                            dan mantap</p>
                        <div id="menu" class="md:block">
                            <p class="mt-3 text-base leading-normal text-gray-600  w-full md:w-9/12 xl:w-5/6">
                                When you want to decorate your home, the idea of choosing a decorative theme can seem
                                daunting. Some themes seem to have an endless amount of pieces, while others can feel
                                hard to accomplish</p>
                            <div class="hidden md:flex mt-6 flex-row justify-start items-start space-x-4">
                                <div class="">
                                    <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                        alt="chair-1" />
                                </div>
                            </div>
                            <div class="md:hidden carousel pt-8 cursor-none"
                                data-flickity='{ "wrapAround": true,"pageDots": false }'>
                                <div class="carousel-cell">
                                    <div class="md:w-full h-full relative">
                                        <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                            alt="bag" class="w-full h-full object-fit object-cover" />
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="md:w-full h-full relative">
                                        <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png"
                                            alt="shoes" class="w-full h-full object-fit object-cover" />
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="md:w-full h-full relative">
                                        <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                            alt="wallet" class="w-full h-full object-fit object-cover" />
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="md:w-full h-full relative">
                                        <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png"
                                            alt="wallet" class="w-full h-full object-fit object-cover" />
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="md:w-full h-full relative">
                                        <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                            alt="wallet" class="w-full h-full object-fit object-cover" />
                                    </div>
                                </div>
                                <div class="carousel-cell">
                                    <div class="md:w-full h-full relative">
                                        <img src="https://i.ibb.co/znYKsbc/vincent-wachowiak-z-P316-KSOX0-E-unsplash-1.png"
                                            alt="wallet" class="w-full h-full object-fit object-cover" />
                                    </div>
                                </div>
                                <div class="carousel-cell"></div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- baris --}}
                <div class="flex px-8 flex-col">
                    <div class="h-px w-full bg-slate-400"></div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative flex items-end font-bold mt-6">
                    <h2 class="text-2xl">Hewan ternak lain</h2>
                </div>
                <main class="w-full mt-6">
                    <div class="container">
                        <div class="grid gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">

                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
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
                                            <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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

                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
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
                                            <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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

                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
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
                                            <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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

                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
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
                                            <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                        <div class="flex justify-center">
                            <div class="flex rounded-md mt-8">
                                <a href="#"
                                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                                <a href="#"
                                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                                <a href="#"
                                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                                <a href="#"
                                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                                <a href="#"
                                    class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
