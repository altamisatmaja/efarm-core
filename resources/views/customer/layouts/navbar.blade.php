<style>
    .blurred-background {
        backdrop-filter: blur(10px);
    }

    .hover-trigger .hover-target {
        display: none;
    }

    .hover-trigger:hover .hover-target {
        display: block;
    }

    .hover-target:hover {
        display: block;
    }
</style>

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
                        <button id="dropdown-button"
                            class="relative group transition-all duration-200 focus:overflow-visible w-max h-max p-3 overflow-hidden flex flex-row items-center justify-center bg-white gap-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                width="24">
                                <path
                                    d="M160-240q-17 0-28.5-11.5T120-280q0-17 11.5-28.5T160-320h640q17 0 28.5 11.5T840-280q0 17-11.5 28.5T800-240H160Zm0-200q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520h640q17 0 28.5 11.5T840-480q0 17-11.5 28.5T800-440H160Zm0-200q-17 0-28.5-11.5T120-680q0-17 11.5-28.5T160-720h640q17 0 28.5 11.5T840-680q0 17-11.5 28.5T800-640H160Z" />
                            </svg>
                            <span class="font-semibold text-textbase">
                                Kategori
                            </span>
                            <div id="dropdown-menu"
                                class="absolute shadow-lg -bottom-52 left-0 w-full h-max p-2 bg-white border border-zinc-200 rounded-lg flex flex-col gap-2">
                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                    </svg>
                                    <p>Market</p>
                                </span>
                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                    </svg>
                                    <p>Partner</p>
                                </span>
                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 21q-3.775 0-6.387-2.613T3 12q0-3.45 2.25-5.988T11 3.05q.325-.05.575.088t.4.362q.15.225.163.525t-.188.575q-.425.65-.638 1.375T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q.775 0 1.538-.225t1.362-.625q.275-.175.563-.162t.512.137q.25.125.388.375t.087.6q-.35 3.45-2.937 5.725T12 21m0-2q2.2 0 3.95-1.213t2.55-3.162q-.5.125-1 .2t-1 .075q-3.075 0-5.238-2.163T9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.163 2.55T5 12q0 2.9 2.05 4.95T12 19m-.25-6.75" />
                                    </svg>
                                    <p>AI</p>
                                </span>
                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 48 48">
                                        <g fill="none" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 32h10v9H19z" />
                                            <rect width="38" height="24" x="5" y="8" rx="2" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M22 27h4M14 41h20" />
                                        </g>
                                    </svg>
                                    <p>App</p>
                                </span>
                            </div>
                        </button>
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
                            <button id="dropdown-button-akun"
                                class="relative ring-1 ring-primarybase group transition-all duration-200 w-max h-max p-2.5 flex flex-row items-center justify-center bg-white gap-2 rounded-lg">
                                <img src="https://randomuser.me/api/portraits/men/12.jpg"
                                    class="w-auto h-6 rounded-full" alt="fotoprofil" />
                                <span class="font-semibold text-textbase">
                                    Altamis
                                </span>
                                <svg :class="{ 'rotate-180 duration-300': open, 'duration-300': !open }"
                                    class="text-gray-400 -rotate-90 ml-2 h-5 w-5 group-hover:text-gray-500"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div id="dropdown-menu-akun"
                                    class="absolute shadow-lg -bottom-52 left-0 w-full h-max p-2 bg-white border border-zinc-200 rounded-lg flex flex-col gap-2">
                                    <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                        </svg>
                                        <p>Market</p>
                                    </span>
                                    <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                        </svg>
                                        <p>Partner</p>
                                    </span>
                                    <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 21q-3.775 0-6.387-2.613T3 12q0-3.45 2.25-5.988T11 3.05q.325-.05.575.088t.4.362q.15.225.163.525t-.188.575q-.425.65-.638 1.375T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q.775 0 1.538-.225t1.362-.625q.275-.175.563-.162t.512.137q.25.125.388.375t.087.6q-.35 3.45-2.937 5.725T12 21m0-2q2.2 0 3.95-1.213t2.55-3.162q-.5.125-1 .2t-1 .075q-3.075 0-5.238-2.163T9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.163 2.55T5 12q0 2.9 2.05 4.95T12 19m-.25-6.75" />
                                        </svg>
                                        <p>AI</p>
                                    </span>
                                    <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 48 48">
                                            <g fill="none" stroke="currentColor" stroke-width="4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19 32h10v9H19z" />
                                                <rect width="38" height="24" x="5" y="8" rx="2" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M22 27h4M14 41h20" />
                                            </g>
                                        </svg>
                                        <p>App</p>
                                    </span>
                                </div>
                            </button>
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
            <div class="w-full flex justify-center p-3 items-center">
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
                <a href="{{ route('homepage.about') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Terdekat</p>
                    </div>
                </a>
                <a href="{{ route('homepage.about') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Termurah</p>
                    </div>
                </a>
                @php
                    $categoryproduct = App\Models\CategoryProduct::all();
                @endphp
                @foreach ($categoryproduct as $category)
                    <a href="{{ route('homepage.about') }}">
                        <div class="px-5">
                            <p class="font-semibold text-textbase">{{ $category->nama_kategori_product }}</p>
                        </div>
                    </a>
                @endforeach
                {{-- <a href="{{ route('homepage.about') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Domba</p>
                    </div>
                </a>
                <a href="{{ route('homepage.about') }}">
                    <div class="px-5">
                        <p class="font-semibold text-textbase">Sapi</p>
                    </div>
                </a> --}}
            </div>
        @else
            <div class="sticky-nonauth w-full bg-white h-16 px-10 flex justify-between ">
                <div class="w-full lg:w-30/6 xl:w-full  h-full flex items-center px-4 ">
                    <a href="/">
                        <img class="rounded-lg w-32" src="{{ asset('logo.png') }}" alt="efarm logo" />
                    </a>
                </div>
                <!-- Services Button -->
                <div x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen"
                        class="p-2 bg-gray-100 rounded-full hover:bg-gray-200 focus:outline-none focus:ring">
                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                        x-show.transition.opacity="isOpen"
                        class="absolute mt-3 transform bg-white rounded-md shadow-lg -translate-x-3/4 min-w-max">
                        <div class="p-4 text-lg font-medium border-b">Web apps & services</div>
                        <ul class="flex flex-col p-2 my-3 space-y-3">
                            <li>
                                <a href="#"
                                    class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                    <span class="block mt-1">
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                            <path fill="#fff"
                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                        </svg>
                                    </span>
                                    <span class="flex flex-col">
                                        <span class="text-lg">Atlassian</span>
                                        <span class="text-sm text-gray-400">Lorem ipsum dolor sit.</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-start px-2 py-1 space-x-2 rounded-md hover:bg-gray-100">
                                    <span class="block mt-1">
                                        <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </span>
                                    <span class="flex flex-col">
                                        <span class="text-lg">Slack</span>
                                        <span class="text-sm text-gray-400">Lorem ipsum, dolor sit amet consectetur
                                            adipisicing elit.</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="flex items-center justify-center p-4 text-blue-700 underline border-t">
                            <a href="#">Show all apps</a>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center items-center">
                    <button
                        class="relative group transition-all duration-200 focus:overflow-visible w-max h-max p-3 overflow-hidden flex flex-row items-center justify-center gap-2 rounded-lg">
                        <span class="layanan-nonauth font-semibold text-textbase">
                            Layanan
                        </span>
                        <svg class="rotate-90 group-focus:rotate-180" xmlns="http://www.w3.org/2000/svg"
                            width="22" height="22" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m12 10.8l-3.9 3.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l4.6-4.6q.3-.3.7-.3t.7.3l4.6 4.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275z" />
                        </svg>
                        <div
                            class="absolute shadow-lg -bottom-52 left-0 w-full h-max p-2 bg-white border border-zinc-200 rounded-lg flex flex-col gap-2">
                            <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                </svg>
                                <p>Market</p>
                            </span>
                            <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                </svg>
                                <p>Partner</p>
                            </span>
                            <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M12 21q-3.775 0-6.387-2.613T3 12q0-3.45 2.25-5.988T11 3.05q.325-.05.575.088t.4.362q.15.225.163.525t-.188.575q-.425.65-.638 1.375T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q.775 0 1.538-.225t1.362-.625q.275-.175.563-.162t.512.137q.25.125.388.375t.087.6q-.35 3.45-2.937 5.725T12 21m0-2q2.2 0 3.95-1.213t2.55-3.162q-.5.125-1 .2t-1 .075q-3.075 0-5.238-2.163T9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.163 2.55T5 12q0 2.9 2.05 4.95T12 19m-.25-6.75" />
                                </svg>
                                <p>AI</p>
                            </span>
                            <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 48 48">
                                    <g fill="none" stroke="currentColor" stroke-width="4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 32h10v9H19z" />
                                        <rect width="38" height="24" x="5" y="8" rx="2" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M22 27h4M14 41h20" />
                                    </g>
                                </svg>
                                <p>App</p>
                            </span>
                        </div>
                    </button>
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
                                class="middle none center mr-4 rounded-lg bg-primarybase py-2 px-9 font-sans text-md font-bold text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:opacity-50 disabled:shadow-none"
                                style="outline: none;" data-ripple-light="true">
                                Masuk
                            </button>
                        </a>
                        <a href="{{ route('customer.register') }}" class="cursor-pointer">
                            <button
                                class="middle none center mr-4 rounded-lg border hover:border-white border-primarybase py-2 px-9 text-primarybase font-sans text-md font-bold primarybase-white shadow-md shadow-blue-500/20 transition-all hover:bg-primarybase hover:text-white hover:shadow-lg focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
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
    window.addEventListener('scroll', function() {
        var scrollPosition = window.scrollY;
        var navbar = document.querySelector('.sticky');
        var bgScrollNoAuth = document.querySelector('.sticky-nonauth');
        var layananNoAuth = document.querySelector('.layanan-nonauth');

        if (scrollPosition > 100) {
            var blurAmount = scrollPosition / 100;
            navbar.style.backdropFilter = "blur(" + blurAmount + "px)";
            bgScrollNoAuth.classList.remove('bg-white');
            layananNoAuth.classList.replace('text-textbase', 'text-white');
        } else {
            bgScrollNoAuth.classList.add('bg-white');
            navbar.style.backdropFilter = "none";
            layananNoAuth.classList.replace('text-white', 'text-textbase');
        }
    });

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
