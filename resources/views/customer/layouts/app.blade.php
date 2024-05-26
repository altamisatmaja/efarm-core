<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body class="bg-white">
    <div class="min-h-screen flex flex-col">
        <div class="sticky top-0 z-10">
            <div class="w-full bg-primarybase h-6 flex justify-center items-center">
                <div class="">
                    <p class="text-white font-medium text-sm">Dipercaya oleh 412 mitra yang tersebar diseluruh
                        Indonesia</p>
                </div>
            </div>
            <div
                class="bg-white border-b border-gray-200 text-white py-2 items-center flex flex-wrap px-4 md:px-10 md:flex md:items-center md:justify-between justify-start">
                <div class="pl-4 md:pl-0">
                    <a href="/">
                        <img class="rounded-lg w-20 md:w-32" src="{{ asset('logo.png') }}" alt="efarm logo" />
                    </a>
                </div>

                <div class="flex justify-center md:justify-start md:w-auto items-center md:items-center">
                    <div class="hidden md:visible sm:visible md:flex md:mr-0">
                        <div x-data="{ isOpen: false }">
                            <button @click="isOpen = !isOpen"
                                class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-4 hover:ring-1 hover:ring-primarybase">
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#444444">
                                        <path
                                            d="M80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q127 0 226.5 70T851-629q7 17 .5 34T828-572q-16 5-30.5-3T777-599q-24-60-69-106t-108-71v16q0 33-23.5 56.5T520-680h-80v80q0 17-11.5 28.5T400-560h-80v80h40q17 0 28.5 11.5T400-440v80h-40L168-552q-3 18-5.5 36t-2.5 36q0 122 80.5 213T443-162q16 2 26.5 13.5T480-120q0 17-11.5 28.5T441-82Q288-97 184-210T80-480Zm736 352L716-228q-21 12-45 20t-51 8q-75 0-127.5-52.5T440-380q0-75 52.5-127.5T620-560q75 0 127.5 52.5T800-380q0 27-8 51t-20 45l100 100q11 11 11 28t-11 28q-11 11-28 11t-28-11ZM620-280q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Z" />
                                    </svg>
                                </div>
                                <span class="font-semibold whitespace-nowrap text-textbase">
                                    Layanan
                                </span>
                            </button>

                            <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                                x-show.transition.opacity="isOpen"
                                class="absolute mt-3 transform bg-white rounded-md shadow-lg  min-w-max">
                                <ul class="flex flex-col ">
                                    <li class=" rounded-t-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                        <a href="{{ route('homepage.partner') }}"
                                            class="flex items-start px-4 py-2 space-x-2 rounded-md ">
                                            <div class="items-center flex">
                                                <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                                    class="h-5 mr-4" />
                                                <span class="flex flex-col ">
                                                    <span class="text-textbase text-lg font-semibold ">Partner</span>
                                                    <span class="text-textbase text-sm ">Jual hewan ternak</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" cursor-pointer hover:ring-1 hover:ring-primarybase">
                                        <a href="{{ route('homepage.market') }}"
                                            class="flex items-start px-4 py-2 space-x-2 ">
                                            <div class="items-center flex ">
                                                <img src="{{ asset('efarm-market.png') }}" alt="montaña"
                                                    class="h-5 mr-4" />
                                                <span class="flex flex-col">
                                                    <span class="text-textbase text-lg font-semibold ">Market</span>
                                                    <span class="text-textbase text-sm ">Beli hewan ternak</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <a href="{{ route('homepage.layanan') }}" class="">
                                    <div
                                        class="p-4 text-lg font-medium border-t  rounded-b-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                        <div class="items-center flex">
                                            <img src="{{ asset('efarm-layanan.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col">
                                                <span class="text-textbase text-lg font-semibold ">Semua
                                                    layanan</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="md:flex md:visible ml-6">
                        <a href="/"
                            class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6 hidden md:flex">Beranda</a>
                        <a href="{{ route('homepage.market') }}"
                            class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6">Market</a>
                        <a href="{{ route('homepage.partner') }}"
                            class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6">Partner</a>
                        <a href="{{ route('homepage.market.nearest') }}"
                            class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6">Terdekat</a>
                        <a href="{{ route('homepage.about') }}"
                            class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6">Tentang</a>
                    </div>


                </div>
                <div class="flex flex-wrap">
                    <div class="hidden md:visible sm:visible md:flex ">
                        <div x-data="{ isOpen: false }">
                            <button @click="isOpen = !isOpen"
                                class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-4 ring-1 ring-primarybase">
                                <div class="relative">
                                    <img class="relative inline-block h-6 w-6 rounded-full object-cover object-center"
                                        alt="Image placeholder"
                                        src="/uploads/{{ auth()->user()->profile_photo_path }}" />
                                </div>
                                <span class="font-semibold whitespace-nowrap text-textbase">
                                    {{ auth()->user()->nama }}
                                </span>
                            </button>

                            <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                                x-show.transition.opacity="isOpen"
                                class="absolute mt-3 transform bg-white rounded-md shadow-lg  min-w-max">
                                <ul class="flex flex-col ">
                                    <li class=" rounded-t-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                        <a href="{{ route('customer.account') }}"
                                            class="flex items-start px-4 py-2 space-x-2 rounded-md ">
                                            <div class="items-center flex">
                                                <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                                    class="h-5 mr-4" />
                                                <span class="flex flex-col ">
                                                    <span class="text-textbase text-lg font-semibold ">Akun</span>
                                                    <span class="text-textbase text-sm ">Kelola akun</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=" cursor-pointer hover:ring-1 hover:ring-primarybase">
                                        <a href="{{ route('customer.lacak') }}"
                                            class="flex items-start px-4 py-2 space-x-2 ">
                                            <div class="items-center flex ">
                                                <img src="{{ asset('efarm-market.png') }}" alt="montaña"
                                                    class="h-5 mr-4" />
                                                <span class="flex flex-col">
                                                    <span class="text-textbase text-lg font-semibold ">Lacak</span>
                                                    <span class="text-textbase text-sm ">Lacak orderan</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <a href="{{ route('customer.dashboard') }}" class="">
                                    <div
                                        class="p-4 text-lg font-medium border-t  rounded-b-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                        <div class="items-center flex">
                                            <img src="{{ asset('efarm-layanan.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col">
                                                <span class="text-textbase text-lg font-semibold ">Dashboard</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('customer.logout') }}"
                        class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-3 ml-4 hover:bg-gray-100 md:flex-wrap md:flex">
                        <div class="relative flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                width="24">
                                <path
                                    d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                            </svg>
                            <span class="font-semibold text-textbase ml-2 hidden md:flex md:visible">Logout</span>
                        </div>
                    </a>
                </div>

                <button id="menuBtn" class="md:hidden">
                    <i class="fas fa-bars text-gray-500 text-lg"></i>
                </button>
            </div>

            <div id="navBar"
                class="bg-white text-white border-b hidden border-gray-300 py-2 flex flex-wrap items-center justify-center md:flex md:items-center md:justify-center">
                <div class="flex justify-center md:w-auto">
                    <div class="md:visible">
                        @php
                            $categoryproduct = App\Models\CategoryProduct::all();
                        @endphp
                        @foreach ($categoryproduct as $category)
                            <a href="{{ route('homepage.market.category', $category->slug_kategori_product) }}"
                                class="text-sm
                                px-1 font-medium text-textbase md:text-lg md:font-medium
                                md:ml-6">{{ $category->nama_kategori_product }}</a>
                        @endforeach
                        @php
                            $categorylivestock = App\Models\CategoryLivestock::all();
                        @endphp
                        @foreach ($categorylivestock as $categorylivestocks)
                            <a href="{{ route('homepage.market.farm', $categorylivestocks->slug) }}"
                                class="text-sm
                                px-1 font-medium text-textbase md:text-lg md:font-medium
                                md:ml-6">{{ $categorylivestocks->nama_kategori_hewan }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <aside class="p-4 md:p-4 md:w-60 hidden md:block h-auto" id="sideNav">
                <div class="bg-primarybase rounded-xl">
                    <div class="flex flex-wrap mx-auto justify-center md:flex-col md:justify-start p-3">
                        <div class="hidden md:visible md:flex relative border-b border-white/20">
                            <div class="flex flex-col items-center my-4">
                                <div class="flex flex-wrap px-3">
                                    <div>
                                        <p class="text-lg font-bold text-white">
                                            {{ auth()->user()->nama }}
                                        </p>
                                        <div class="text-white font-medium text-md">
                                            Selamat datang 👋
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:px-0 md:py-1 flex flex-wrap">
                            <a href="{{ route('customer.account') }}"
                                class="md:mt-3 text-white px-2 md:w-full pr-4  hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                                    class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 -960 960 960" fill="currentColor">
                                    <path
                                        d="M200-520q-33 0-56.5-23.5T120-600v-160q0-33 23.5-56.5T200-840h160q33 0 56.5 23.5T440-760v160q0 33-23.5 56.5T360-520H200Zm0 400q-33 0-56.5-23.5T120-200v-160q0-33 23.5-56.5T200-440h160q33 0 56.5 23.5T440-360v160q0 33-23.5 56.5T360-120H200Zm400-400q-33 0-56.5-23.5T520-600v-160q0-33 23.5-56.5T600-840h160q33 0 56.5 23.5T840-760v160q0 33-23.5 56.5T760-520H600Zm0 400q-33 0-56.5-23.5T520-200v-160q0-33 23.5-56.5T600-440h160q33 0 56.5 23.5T840-360v160q0 33-23.5 56.5T760-120H600ZM200-600h160v-160H200v160Zm400 0h160v-160H600v160Zm0 400h160v-160H600v160Zm-400 0h160v-160H200v160Zm400-400Zm0 240Zm-240 0Zm0-240Z" />
                                </svg><span class="mx-1"></span>Dashboard</a>
                            <a href="{{ route('customer.order.list') }}"
                                class="text-white px-2 md:w-full pr-4   hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                                    class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 -960 960 960" fill="currentColor">
                                    <path
                                        d="M240-160q-50 0-85-35t-35-85H80q-17 0-28.5-11.5T40-320v-400q0-33 23.5-56.5T120-800h480q33 0 56.5 23.5T680-720v80h80q19 0 36 8.5t28 23.5l88 117q4 5 6 11t2 13v147q0 17-11.5 28.5T880-280h-40q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                </svg><span class="mx-1 "></span>Pesanan</a>
                            <a href="{{ route('customer.cart') }}"
                                class="text-white px-2 md:w-full pr-4   hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                                    class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 -960 960 960" fill="currentColor">
                                    <path
                                        d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                </svg><span class="mx-1 "></span>Wishlist</a>
                            <a href="{{ route('customer.lacak') }}"
                                class="text-white px-2 md:w-full pr-4   hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                                    class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 -960 960 960" fill="currentColor">
                                    <path
                                        d="M660-120q-75 0-127.5-52.5T480-300q0-75 52.5-127.5T660-480q75 0 127.5 52.5T840-300q0 26-7.5 50T812-204l80 80q11 11 11 28t-11 28q-11 11-28 11t-28-11l-80-80q-22 13-46 20.5t-50 7.5Zm0-80q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-460 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h167q11-35 43-57.5t70-22.5q40 0 71.5 22.5T594-840h166q33 0 56.5 23.5T840-760v160q0 17-11.5 28.5T800-560q-17 0-28.5-11.5T760-600v-160h-80v80q0 17-11.5 28.5T640-640H320q-17 0-28.5-11.5T280-680v-80h-80v560h160q17 0 28.5 11.5T400-160q0 17-11.5 28.5T360-120H200Zm280-640q17 0 28.5-11.5T520-800q0-17-11.5-28.5T480-840q-17 0-28.5 11.5T440-800q0 17 11.5 28.5T480-760Z" />
                                </svg><span class="mx-1 "></span>Lacak</a>
                            <a href="#"
                                class="text-white px-2 md:w-full pr-4   hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                                    class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 -960 960 960" fill="currentColor">
                                    <path
                                        d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                                </svg><span class="mx-1"></span>Akun</a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>

        <div class="flex md:-mt-96">
            <div class="md:ml-56 flex-1 p-4">
                <main class="h-full bg-yellow-200">
                    <p>ss</p>
                    <p>ss</p>
                    <p>ss</p>
                </main>
            </div>
        </div>
    </div>
    <script>
        const sideNav = document.getElementById('sideNav');
        const navBar = document.getElementById('navBar');
        const menuBtn = document.getElementById('menuBtn');
        if (sideNav) {
            menuBtn.addEventListener('click', () => {
                sideNav.classList.toggle('hidden');
                navBar.classList.toggle('hidden');
            });
        } else {
            menuBtn.addEventListener('click', () => {
                navBar.classList.toggle('hidden');
            });
        }
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
