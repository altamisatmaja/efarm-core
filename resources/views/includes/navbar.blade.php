{{-- <nav class="fixed px-8 flex justify-between bg-white text-white w-screen border-b">
    <div class="px-5 xl:px-12 py-3 flex w-full items-center">
        <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
            <img src="{{ asset('logo.svg') }}" class="h-6 mr-2" alt="eFarm">
        </a>
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
            <li><a class="hover:text-gray-200 text-primarybase" href="#">
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = ! open" type="button"
                            class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900"
                            aria-expanded="false">
                            <span class="font-semibold text-textbase">Layanan</span>
                            <svg :class="{ 'rotate-180 duration-300': open, 'duration-300': !open }"
                                class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#444444"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-200"
                            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                            class="absolute z-50 left-1/2 z-full w-11 mt-3 -translate-x-1/2 transform px-2 sm:px-0">

                            <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="bg-gray-50 py-5 px-5 sm:px-8 sm:py-8">
                                    <ul class=" space-y-4">
                                        <li class="truncate text-base">
                                            <a href="#"
                                                class="font-medium text-gray-900 hover:text-gray-700">eFarm Mart</a>
                                        </li>
                                        <li class="truncate text-base">
                                            <a href="#"
                                                class="font-medium text-gray-900 hover:text-gray-700">eFarm Partner</a>
                                        </li>
                                        <li class="truncate text-base">
                                            <a href="#"
                                                class="font-medium text-gray-900 hover:text-gray-700">eFarm AI</a>
                                        </li>
                                        <li class="truncate text-base">
                                            <a href="#"
                                                class="font-medium text-gray-900 hover:text-gray-700">eFarm App</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </a></li>
            <li><a class="hover:text-gray-200 text-textbase" href="#">Toko</a></li>
            <li><a class="hover:text-gray-200 text-textbase" href="#">Partner</a></li>
            <li><a class="hover:text-gray-200 text-textbase" href="#">Tentang</a></li>
        </ul>
        <div class="hidden xl:flex items-center space-x-5">
            <a href="{{ route('customer.login') }}"
                class="middle none center mr-3 w-full border bg-primarybase rounded-lg hover:border hover:bg-white hover:text-primarybase border-primarybase text-white py-2.5 px-9 font-sans text-xs font-bold uppercase transition-all focus:ring focus:ring-primarybase active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-dark="true">
                Masuk
            </a>
            <button
                class="middle none center mr-3 rounded-lg border hover:bg-primarybase hover:text-white border-primarybase py-2.5 px-9 font-sans text-xs font-bold uppercase text-primarybase transition-all focus:ring focus:ring-primarybase active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                data-ripple-dark="true">
                Daftar
            </button>
        </div>
    </div>
    <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-white" fill="#AAC14C" viewBox="0 0 24 24"
            stroke="#AAC14C">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </a>
</nav>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
