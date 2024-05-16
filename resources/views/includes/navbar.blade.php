<div class="sticky top-0 z-50 border-b">
    <div>
        <div class="w-full bg-primarybase h-6 flex justify-center items-center">
            <div class="">
                <p class="text-white font-medium text-sm">Dipercaya oleh 412 mitra yang tersebar diseluruh
                    Indonesia</p>
            </div>
        </div>
        @if (Auth::check())
            <div class="w-full bg-white h-16 px-10 border-b flex justify-between ">
                <div class="w-full lg:w-30/6 xl:w-full  h-full flex items-center px-4 ">
                    <a href="/">
                        <img class="rounded-lg w-32" src="{{ asset('logo.png') }}" alt="efarm logo" />
                    </a>
                    <div class="ml-8 flex">
                        <div x-data="{ isOpen: false }">
                            <button @click="isOpen = !isOpen"
                                class="relative group transition-all duration-200 focus:overflow-visible w-max h-max p-3 overflow-hidden flex flex-row items-center justify-center gap-2 rounded-lg">
                                <span class="layanan-nonauth font-semibold text-textbase">
                                    Layanan
                                </span>
                                <svg class="rotate-90 group-focus:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                    width="22" height="22" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="m12 10.8l-3.9 3.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l4.6-4.6q.3-.3.7-.3t.7.3l4.6 4.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275z" />
                                </svg>
                            </button>
    
                            <!-- Dropdown -->
                            <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                                x-show.transition.opacity="isOpen"
                                class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                <ul class="flex flex-col p-2 my-3 space-y-3">
                                    <li>
                                        <a href="{{ route('homepage.partner') }}"
                                            class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                            <div class="items-center flex">
                                                <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                                    class="h-5 mr-4" />
                                                <span class="flex flex-col">
                                                    <span class="text-textbase text-lg font-semibold">Partner</span>
                                                    <span class="text-textbase text-sm">Jual hewan ternak Anda</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('homepage.market') }}"
                                            class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                            <div class="items-center flex">
                                                <img src="{{ asset('efarm-market.png') }}" alt="montaña"
                                                    class="h-5 mr-4" />
                                                <span class="flex flex-col">
                                                    <span class="text-textbase text-lg font-semibold">Market</span>
                                                    <span class="text-textbase text-sm">Mulai beli ternak</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <a href="{{ route('homepage.layanan') }}">
                                    <div class="p-4 text-lg font-medium border-t">
                                        <div class="items-center flex">
                                            <img src="{{ asset('efarm-layanan.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col">
                                                <span class="text-textbase text-lg font-semibold">Semua Layanan</span>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center">
                    <label for="search-product" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" id="search-product"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 "
                            placeholder="Apa yang ingin anda cari?" required>
                    </div>
                </div>
                <div class="w-full h-full flex justify-end items-center">
                    <div class="flex mx-6">
                        <div class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-4 hover:bg-gray-100">
                            <div class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                    width="24">
                                    <path
                                        d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                </svg>
                                <span
                                    class="absolute -top-2 -right-2 flex h-4 w-4 items-center justify-center rounded-full bg-primarybase p-2 text-[10px] text-white">3</span>
                            </div>
                            <span class="font-semibold text-textbase">
                                Keranjang
                            </span>
                        </div>
                        <div class="mx-6 flex">
                            <div x-data="{ isOpen: false }">
                                <button @click="isOpen = !isOpen"
                                    class="relative group transition-all duration-200 focus:overflow-visible w-max h-max p-3 overflow-hidden flex flex-row items-center justify-center gap-2 rounded-lg">
                                    <span class="layanan-nonauth font-semibold text-textbase">
                                        {{ auth()->user()->nama }}
                                    </span>
                                </button>
        
                                <!-- Dropdown -->
                                <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                                    x-show.transition.opacity="isOpen"
                                    class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                                    <ul class="flex flex-col p-2 my-3 space-y-3">
                                        <li>
                                            <a href="{{ route('homepage.partner') }}"
                                                class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                                <div class="items-center flex">
                                                    <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                                        class="h-5 mr-4" />
                                                    <span class="flex flex-col">
                                                        <span class="text-textbase text-lg font-semibold">Partner</span>
                                                        <span class="text-textbase text-sm">Jual hewan ternak Anda</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('homepage.market') }}"
                                                class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                                <div class="items-center flex">
                                                    <img src="{{ asset('efarm-market.png') }}" alt="montaña"
                                                        class="h-5 mr-4" />
                                                    <span class="flex flex-col">
                                                        <span class="text-textbase text-lg font-semibold">Market</span>
                                                        <span class="text-textbase text-sm">Mulai beli ternak</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <a href="{{ route('homepage.layanan') }}">
                                        <div class="p-4 text-lg font-medium border-t">
                                            <div class="items-center flex">
                                                <img src="{{ asset('efarm-layanan.png') }}" alt="montaña"
                                                    class="h-5 mr-4" />
                                                <span class="flex flex-col">
                                                    <span class="text-textbase text-lg font-semibold">Semua Layanan</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('customer.logout') }}">
                            <div
                                class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-4 hover:bg-gray-100">
                                <div class="relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                        width="24">
                                        <path
                                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                                    </svg>
                                </div>
                                <span class="font-semibold text-textbase">
                                    Logout
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full flex justify-center p-3 items-center">
                <a href="/">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Home</p>
                    </div>
                </a>
                <a href="{{ route('homepage.market') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Market</p>
                    </div>
                </a>
                <a href="{{ route('homepage.partner') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Partner</p>
                    </div>
                </a>
                <a href="{{ route('homepage.about') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Tentang</p>
                    </div>
                </a>
                <div class="flex flex-col">
                    <div class="w-px h-5 bg-slate-400"></div>
                </div>
                <a href="{{ route('homepage.market.nearest') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Terdekat</p>
                    </div>
                </a>
                @php
                    $categoryproduct = App\Models\CategoryProduct::all();
                @endphp
                @foreach ($categoryproduct as $category)
                    <a href="{{ route('homepage.market.category', $category->slug_kategori_product) }}">
                        <div class="px-5">
                            <p class="font-semibold text-textbase">{{ $category->nama_kategori_product }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @else
            <div class="sticky-nonauth w-full bg-white h-16 px-10 flex justify-between ">
                <div class="w-full lg:w-30/6 xl:w-full  h-full flex items-center px-4 ">
                    <a href="/">
                        <img class="rounded-lg w-32" src="{{ asset('logo.png') }}" alt="efarm logo" />
                    </a>
                </div>
                <div class="w-full flex justify-center items-center">
                    <div x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen"
                            class="relative group transition-all duration-200 focus:overflow-visible w-max h-max p-3 overflow-hidden flex flex-row items-center justify-center gap-2 rounded-lg">
                            <span class="layanan-nonauth font-semibold text-textbase">
                                Layanan
                            </span>
                            <svg class="rotate-90 group-focus:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                width="22" height="22" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m12 10.8l-3.9 3.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l4.6-4.6q.3-.3.7-.3t.7.3l4.6 4.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275z" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                            x-show.transition.opacity="isOpen"
                            class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                            <ul class="flex flex-col p-2 my-3 space-y-3">
                                <li>
                                    <a href="{{ route('homepage.partner') }}"
                                        class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                        <div class="items-center flex">
                                            <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col">
                                                <span class="text-textbase text-lg font-semibold">Partner</span>
                                                <span class="text-textbase text-sm">Jual hewan ternak Anda</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('homepage.market') }}"
                                        class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                        <div class="items-center flex">
                                            <img src="{{ asset('efarm-market.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col">
                                                <span class="text-textbase text-lg font-semibold">Market</span>
                                                <span class="text-textbase text-sm">Mulai beli ternak</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a href="{{ route('homepage.layanan') }}">
                                <div class="p-4 text-lg font-medium border-t">
                                    <div class="items-center flex">
                                        <img src="{{ asset('efarm-layanan.png') }}" alt="montaña"
                                            class="h-5 mr-4" />
                                        <span class="flex flex-col">
                                            <span class="text-textbase text-lg font-semibold">Semua Layanan</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('homepage.market') }}">
                        <div class="px-5">
                            <p class="font-semibold text-textbase">Market</p>
                        </div>
                    </a>
                    <a href="{{ route('homepage.partner') }}">
                        <div class="px-5">
                            <p class="font-semibold text-textbase">Partner</p>
                        </div>
                    </a>
                    <a href="{{ route('homepage.about') }}">
                        <div class="px-5">
                            <p class="font-semibold text-textbase">Tentang</p>
                        </div>
                    </a>
                </div>
                <div class="w-full  h-full flex justify-end items-center">
                    <div class="flex">
                        <a href="{{ route('customer.login') }}" class="cursor-pointer">
                            <button
                                class="middle none center mr-4 rounded-lg border border-primarybase py-2 px-9 text-white font-sans text-md font-bold bg-primarybase transition-all hover:bg-white hover:text-primarybase focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                style="outline: none;" data-ripple-light="true">
                                Masuk
                            </button>
                        </a>
                        <a href="{{ route('customer.register') }}" class="cursor-pointer">
                            <button
                                class="middle none center mr-4 rounded-lg border border-primarybase py-2 px-9 text-primarybase font-sans text-md font-bold primarybase-white transition-all hover:bg-primarybase hover:text-white focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                style="outline: none;" data-ripple-light="true">
                                Daftar
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script>
    // window.addEventListener('scroll', function() {
    //     var scrollPosition = window.scrollY;
    //     var navbar = document.querySelector('.sticky');
    //     var bgScrollNoAuth = document.querySelector('.sticky-nonauth');
    //     var layananNoAuth = document.querySelector('.layanan-nonauth');

    //     if (scrollPosition > 100) {
    //         var blurAmount = scrollPosition / 100;
    //         navbar.style.backdropFilter = "blur(" + blurAmount + "px)";
    //         // bgScrollNoAuth.classList.remove('bg-white');
    //         // layananNoAuth.classList.replace('text-textbase', 'text-white');
    //     } else {
    //         bgScrollNoAuth.classList.add('bg-white');
    //         navbar.style.backdropFilter = "none";
    //         // layananNoAuth.classList.replace('text-white', 'text-textbase');
    //     }
    // });

    const dropdownButton = document.getElementById('dropdown-button');
    const dropdownButtonAkun = document.getElementById('dropdown-button-akun');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const dropdownMenuAkun = document.getElementById('dropdown-menu-akun');

    let isDropdownOpen = false;

    function toggleDropdown() {
        isDropdownOpen = !isDropdownOpen;
        if (isDropdownOpen) {
            dropdownMenu.classList.remove('hidden');
        } else {
            dropdownMenu.classList.add('hidden');
        }
    }

    function toggleDropdownAkun() {
        isDropdownOpen = !isDropdownOpen;
        if (isDropdownOpen) {
            dropdownMenuAkun.classList.remove('hidden');
        } else {
            dropdownMenuAkun.classList.add('hidden');
        }
    }

    toggleDropdown();
    toggleDropdownAkun();

    dropdownButton.addEventListener('click', toggleDropdown);
    dropdownButtonAkun.addEventListener('click', toggleDropdownAkun);
</script>
