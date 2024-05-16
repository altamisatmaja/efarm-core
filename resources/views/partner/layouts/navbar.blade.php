<style>
    [x-cloak] {
        display: none !important;
    }

    * {
        font-family: 'Montserrat';
    }
</style>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    const setup = () => {
        return {
            loading: true,
            isSidebarOpen: false,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            isSearchBoxOpen: false,
        }
    }
</script>

@auth
    <nav class="p-4 z-50 md:py-5 xl:px-0 md:container md:mx-w-7xl md:mx-auto">
        <div class="hidden lg:flex lg:justify-between lg:items-center">
            <a href="{{ route('partner.dashboard') }}" class="flex items-start gap-2 group">
                <img src="{{ asset('efarm-partner.png') }}" alt="" class="w-28">
            </a>
            <ul class="flex items-center space-x-1 font-semibold">
                <li><a href="{{ route('partner.dashboard') }}"
                        class="px-2 xl:px-4 py-2 text-textbase text-base rounded-md hover:bg-gray-200">Dashboard</a>
                </li>
                <li class="relative" x-data="{ open: false }">
                    <a x-on:click="open = !open" x-on:click.outside="open = false" href="#"
                        class="px-2 xl:px-4 py-2 text-textbase text-base rounded-md hover:bg-gray-200 flex gap-2 items-center">
                        Order
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 stroke-current stroke-2 text-gray-800 transform duration-500 ease-in-out"
                            :class="open ? 'rotate-90' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg> </a>
                    <ul x-cloak x-show="open" x-transition
                        class="absolute top-10 left-0 bg-white p-4 rounded-md shadow overflow-hidden w-64">
                        @php
                            $username = auth()->user()->username;
                        @endphp
                        <li>
                            <a href="/partner/order"
                                class="p-4 block text-gray-600 text-base rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Semua order
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/new"
                                class="p-4 block text-gray-600 text-base rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order terbaru
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/confirmed"
                                class="p-4 block text-gray-600 text-base rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order dikonfirmasi
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/packed"
                                class="p-4 block text-gray-600 text-base rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order dikemas
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/sent"
                                class="p-4 block text-gray-600 text-base rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order dikirim
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/end"
                                class="p-4 block text-gray-600 text-base rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order selesai
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="{{ route('partner.farm.list') }}"
                        class="px-2 xl:px-4 py-2 text-gray-600 text-base rounded-md hover:bg-gray-200">Peternakan
                    </a>
                </li>
                <li><a href="/partner/report"
                        class="px-2 xl:px-4 py-2 text-gray-600 text-base rounded-md hover:bg-gray-200">Laporan</a></li>
                <li><a href="/partner/testimonial"
                        class="px-2 xl:px-4 py-2 text-gray-600 text-base rounded-md hover:bg-gray-200">Ulasan</a></li>
                <li><a href="/partner/product"
                        class="px-2 xl:px-4 py-2 text-gray-600 text-base rounded-md hover:bg-gray-200">Produk</a></li>
            </ul>
            <ul class="flex space-x-2 xl:space-x-4 font-semibold">
                <li>
                    <a href="/partner/account">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <div class="flex flex-wrap gap-2 justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-textbase"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="text-textbase text-base">Pengaturan Akun</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="flex items-center gap-6">
                <li>
                    <a href="/partner/account">
                        <div
                            class="flex flex-row items-center justify-center rounded-lg gap-2 ring-1 ring-primarybase py-2 px-4">
                            <img src="{{ asset('uploads/' . ($partner->foto_profil ?? 'user.jpeg')) }}"
                                class="w-6 h-6 rounded-full" alt="Foto Profil">
                            <span class="font-semibold text-textbase">
                                {{ $partner->username }}
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('partner.logout') }}">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-current text-gray-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div x-data="{ open: false }" class="lg:hidden relative flex justify-between w-full">
            <a href="#" class="flex items-start gap-2 group">
                <div class="bg-blue-600 text-white p-3 rounded-md group-hover:bg-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class= font-light uppercase">
                    Dashboard
                    <span class="text-base block font-bold tracking-widest">
                        Partner
                    </span>
                </p>
            </a>
            <button x-on:click="open = !open" type="button" class="bg-gray-200 p-3 rounded-md">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div x-show="open" x-transition class="absolute top-14 left-0 right-0 w-full bg-white rounded-md border">
                <ul class="p-4">
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            My Account
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Transactions
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Cards
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Offers
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
@endauth
