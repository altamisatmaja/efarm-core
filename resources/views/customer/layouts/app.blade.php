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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-white">
    <div class="min-h-screen flex flex-col">

        <!-- Navbar -->
        <div
            class="bg-red-100 text-white shadow py-2 items-center flex flex-wrap items-center px-4 md:px-10 md:flex md:items-center md:justify-between justify-start">
            <!-- Logo -->
            <div>
                <a href="/">
                    <img class="rounded-lg w-20" src="{{ asset('logo.png') }}" alt="efarm logo" />
                </a>
            </div>
            <!-- Navbar links -->
            <div class="flex justify-center md:justify-start md:w-auto items-center md:items-center">
                <li class="hidden md:visible sm:visible md:flex" x-data="{ open: false }">
                    <a x-on:click="open = !open" x-on:click.outside="open = false" href="#"
                        class="px-2 xl:px-4 py-2 text-textbase text-base rounded-md hover:bg-primarybase hover:text-white flex gap-2 items-center">
                        Pesanan
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 stroke-current stroke-2 transform duration-500 ease-in-out"
                            :class="open ? 'rotate-90' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg> </a>
                    <ul x-cloak x-show="open" x-transition
                        class="absolute top-16 left-28 bg-white p-4 rounded-md shadow overflow-hidden w-64">
                        @php
                            $username = auth()->user()->username;
                        @endphp
                        <li>
                            <a href="{{ route('partner.order.master') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M240-160q-33 0-56.5-23.5T160-240q0-33 23.5-56.5T240-320q33 0 56.5 23.5T320-240q0 33-23.5 56.5T240-160Zm240 0q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm240 0q-33 0-56.5-23.5T640-240q0-33 23.5-56.5T720-320q33 0 56.5 23.5T800-240q0 33-23.5 56.5T720-160ZM240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400ZM240-640q-33 0-56.5-23.5T160-720q0-33 23.5-56.5T240-800q33 0 56.5 23.5T320-720q0 33-23.5 56.5T240-640Zm240 0q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Zm240 0q-33 0-56.5-23.5T640-720q0-33 23.5-56.5T720-800q33 0 56.5 23.5T800-720q0 33-23.5 56.5T720-640Z" />
                                </svg>
                                Semua pesanan
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('partner.order.new') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M160-240v-436L98-810q-7-15-1-30.5t21-22.5q15-7 30.5-1.5T171-844l77 166h464l77-166q7-15 22.5-21t30.5 2q15 7 21 22.5t-1 30.5l-62 134v436q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm240-200h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z" />
                                </svg>
                                Pesanan terbaru
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partner.order.confirmed') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="m691-235-17-17q-9-9-21.5-9t-21.5 9q-9 9-9 21t9 21l39 39q9 9 21 9t21-9l97-95q9-9 9-21.5t-9-21.5q-9-9-21.5-9t-21.5 9l-75 74ZM280-600h400q17 0 28.5-11.5T720-640q0-17-11.5-28.5T680-680H280q-17 0-28.5 11.5T240-640q0 17 11.5 28.5T280-600ZM720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40ZM120-760q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v215q0 17-11.5 28.5T800-505q-17 0-28.5-11.5T760-545v-215H200v562h243q2 15 6 30t9 29q5 11-4 17.5t-17-1.5l-3-3q-6-6-14-6t-14 6l-32 32q-6 6-14 6t-14-6l-32-32q-6-6-14-6t-14 6l-32 32q-6 6-14 6t-14-6l-32-32q-6-6-14-6t-14 6l-46 46v-680Zm160 480h135q17 0 28.5-11.5T455-320q0-17-11.5-28.5T415-360H280q-17 0-28.5 11.5T240-320q0 17 11.5 28.5T280-280Zm0-160h262q17 0 28.5-11.5T582-480q0-17-11.5-28.5T542-520H280q-17 0-28.5 11.5T240-480q0 17 11.5 28.5T280-440Zm-80 242v-562 562Z" />
                                </svg>
                                Pesanan dikonfirmasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partner.order.packed') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z" />
                                </svg>
                                Pesanan dikemas
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partner.order.sent') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M240-160q-50 0-85-35t-35-85H80q-17 0-28.5-11.5T40-320v-400q0-33 23.5-56.5T120-800h480q33 0 56.5 23.5T680-720v80h80q19 0 36 8.5t28 23.5l88 117q4 5 6 11t2 13v147q0 17-11.5 28.5T880-280h-40q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                </svg>
                                Pesanan dikirim
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partner.order.end') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M80-160q-17 0-28.5-11.5T40-200q0-17 11.5-28.5T80-240h160v-80H120q-17 0-28.5-11.5T80-360q0-17 11.5-28.5T120-400h120v-80h-78q-17 0-28.5-11.5T122-520q0-17 11.5-28.5T162-560h78v-118l-61-132q-7-15-1.5-30.5T198-863q15-7 30.5-1.5T251-844l77 164h464l-61-130q-7-15-1.5-30.5T750-863q15-7 30.5-1.5T803-844l69 148q4 8 6 16.5t2 17.5v422q0 33-23.5 56.5T800-160H80Zm400-280h160q17 0 28.5-11.5T680-480q0-17-11.5-28.5T640-520H480q-17 0-28.5 11.5T440-480q0 17 11.5 28.5T480-440ZM320-240h480v-360H320v360Zm0 0v-360 360Z" />
                                </svg>
                                Pesanan selesai
                            </a>
                        </li>
                    </ul>
                </li>
                <div class="md:flex md:visible">
                    <a href="#" class="text-base md:text-lg font-semibold md:ml-6 hidden md:flex">Beranda</a>
                    <a href="#" class="text-base md:text-lg font-semibold md:ml-6">Market</a>
                    <a href="#" class="text-base md:text-lg font-semibold md:ml-6">Partner</a>
                    <a href="#" class="text-base md:text-lg font-semibold md:ml-6">Tentang</a>
                    <a href="#" class="text-base md:text-lg font-semibold md:ml-6">Terdekat</a>
                </div>

                <div class="mx-6 hidden md:visible sm:visible md:flex">
                    <div x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen"
                            class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-4 hover:bg-gray-100">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                    width="24">
                                    <path
                                        d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                </svg>
                            </div>
                            <span class="font-semibold whitespace-nowrap text-textbase">
                                {{ auth()->user()->nama }}
                            </span>
                        </button>

                        <!-- Dropdown -->
                        <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                            x-show.transition.opacity="isOpen"
                            class="absolute mt-3 transform bg-white rounded-md shadow-lg  min-w-max">
                            <ul class="flex flex-col p-2 my-3 space-y-3">
                                <li>
                                    <a href="{{ route('customer.account') }}"
                                        class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                        <div class="items-center flex">
                                            <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col">
                                                <span class="text-textbase text-lg font-semibold">Pengaturan
                                                    Akun</span>
                                                <span class="text-textbase text-sm">Ubah informasi
                                                    Anda</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('customer.lacak') }}"
                                        class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                        <div class="items-center flex">
                                            <img src="{{ asset('efarm-market.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col">
                                                <span class="text-textbase text-lg font-semibold">Pesanan</span>
                                                <span class="text-textbase text-sm">Lacak pesanan
                                                    Anda</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('customer.dashboard') }}">
                                <div class="p-4 text-lg font-medium border-t">
                                    <div class="items-center flex">
                                        <img src="{{ asset('efarm-layanan.png') }}" alt="montaña"
                                            class="h-5 mr-4" />
                                        <span class="flex flex-col">
                                            <span class="text-textbase text-lg font-semibold">Dashboard</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logout button -->
            <a href="{{ route('customer.logout') }}"
                class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-3 ml-4 hover:bg-gray-100 md:flex-wrap md:flex">
                <div class="relative flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                    </svg>
                    <span class="font-semibold text-textbase ml-2 hidden md:flex md:visible">Logout</span>
                </div>
            </a>

            <!-- Mobile menu button -->
            <button id="menuBtn" class="md:hidden">
                <i class="fas fa-bars text-gray-500 text-lg"></i>
            </button>
        </div>

        <!-- Navbar kedua -->
        <div
            class="bg-red-100 text-white shadow py-2 flex flex-wrap items-center justify-center md:flex md:items-center md:justify-center">
            <div class="flex justify-center md:w-auto">
                <div class="md:visible">
                    <a href="#" class="text-textbase md:text-lg font-semibold md:ml-6">Hewan Ternak</a>
                    <a href="#" class="text-textbase md:text-lg font-semibold md:ml-6">Hewan Kurban</a>
                    <a href="#" class="text-textbase md:text-lg font-semibold md:ml-6">Hewan Aqiqah</a>
                    <a href="#" class="text-textbase md:text-lg font-semibold md:ml-6">Sapi</a>
                    <a href="#" class="text-textbase md:text-lg font-semibold md:ml-6">Kambing</a>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="p-4 md:p-2 bg-blue-300 md:w-60 flex flex-wrap items-center justify-center md:static hidden md:block md:h-screen h-auto"
            id="sideNav">
            <nav class="md:flex-col md:flex px-3">
                <a href="#" class="nav-link"><i class="mr-2"></i>Dashboard</a>
                <a href="#" class="nav-link"><i class="mr-2"></i>Pesanan</a>
                <a href="#" class="nav-link"><i class="mr-2"></i>Wishlist</a>
                <a href="#" class="nav-link"><i class="mr-2"></i>Lacak</a>
                <a href="#" class="nav-link"><i class="mr-2"></i>Akun</a>
            </nav>
            {{-- <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div> --}}
            <p class="mb-1 px-5 py-3 text-xs text-cyan-500 hidden md:visible">Copyright WCSLAT@2023</p>
        </div>
        <!-- Main content -->
        <div class="flex-1 p-4">
            <main class="h-full bg-yellow-200"></main>
        </div>
    </div>
    <script>
        const sideNav = document.getElementById('sideNav');
        const navBar = document.getElementById('navBar');
        const menuBtn = document.getElementById('menuBtn');
        // If sidebar exists, enable menu button
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
