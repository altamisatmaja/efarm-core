@extends('partner.layouts.app')

@section('title', 'Dashboard | Order')

@section('content')
    <div class="flex w-3/4 flex-col h-screen px-16 py-10 mx-auto">
        <div class="flex pb-4">
            <h1 class="text-2xl font-semibold text-textbase">Pengaturan</h1>
        </div>
        <div class="flex">
            <img class="rounded-2xl border-zinc-700 w-20 h-20" alt="potoprofil" <img
            src="/uploads/{{ $partner->foto_profil }}" />
            <div class="w-full text-gray-500 px-4">
                <p class="text-lg font-semibold space-x-1 inline-block overflow-hidden whitespace-nowrap text-ellipsis">
                    <span class="text-textbase">Halo</span><span class="font-extralight text-textbase">{{ $partner->nama_partner }} 👋</span>
                </p>
                <p>Bergabung sejak, {{ $partner->created_at->diffForHumans() }}</p>
            </div>
        </div>
        <div x-data="{ openTab: 1 }" class="py-4">
            <div class="">
                <div class="mb-4 flex space-x-4  bg-white rounded-lg">
                    <button x-on:click="openTab = 1" :class="{ 'bg-primarybase text-white': openTab === 1 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Personal</button>
                    <button x-on:click="openTab = 2" :class="{ 'bg-primarybase text-white': openTab === 2 }"
                        class="flex-1 py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-blue transition-all duration-300">Rekening</button>
                </div>

                <div x-show="openTab === 1" class="transition-all duration-300 w-full">
                    <div class="space-x-2">
                        <div class="grid gap-x-3 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-2">
                            <a href="/partner/account/edit">
                                <div
                                    class="mb-6 h-full rounded-lg bg-white p-6 border border-gray-400 hover:bg-gray-100 hover:shadow-3xl">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                                    viewBox="0 -960 960 960" width="40" stroke="currentColor"
                                                    fill="currentColor" class="text-primarybase">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M433-80q-27 0-46.5-18T363-142l-9-66q-13-5-24.5-12T307-235l-62 26q-25 11-50 2t-39-32l-47-82q-14-23-8-49t27-43l53-40q-1-7-1-13.5v-27q0-6.5 1-13.5l-53-40q-21-17-27-43t8-49l47-82q14-23 39-32t50 2l62 26q11-8 23-15t24-12l-9-66q4-26 23.5-44t46.5-18h94q27 0 46.5 18t23.5 44l9 66q13 5 24.5 12t22.5 15l62-26q25-11 50-2t39 32l47 82q14 23 8 49t-27 43l-53 40q1 7 1 13.5v27q0 6.5-2 13.5l53 40q21 17 27 43t-8 49l-48 82q-14 23-39 32t-50-2l-60-26q-11 8-23 15t-24 12l-9 66q-4 26-23.5 44T527-80h-94Zm7-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z" />
                                                </svg>
                                                <h3 class="my-2 text-xl font-semibold text-gray-900">Informasi Akun</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="my-2 text-md font-normal text-gray-500">Ini mencakup username, email,
                                        dan kata sandi Anda</p>
                                </div>
                            </a>

                            <a href="/partner/account/information">
                                <div
                                    class="mb-6 h-full rounded-lg bg-white p-6 border border-gray-400 hover:bg-gray-100 hover:shadow-3xl">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                                    viewBox="0 -960 960 960" width="40"stroke="currentColor"
                                                    fill="currentColor" class="text-primarybase">
                                                    <path
                                                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                                                </svg>
                                                <h3 class="my-2 text-xl font-semibold text-gray-900">Biodata diri</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="my-2 text-md font-normal text-gray-500">Ini mencakup nomor handphone,
                                        tanggal
                                        lahir dan nama lengkap Anda</p>
                                </div>
                            </a>


                            <a href="/partner/account/address">
                                <div
                                    class="mb-6 h-full rounded-lg bg-white p-6 border border-gray-400 hover:bg-gray-100 hover:shadow-3xl">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="40"
                                                    viewBox="0 -960 960 960" width="40"stroke="currentColor"
                                                    fill="currentColor" class="text-primarybase">
                                                    <path
                                                        d="M480-186q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 79q-14 0-28-5t-25-15q-65-60-115-117t-83.5-110.5q-33.5-53.5-51-103T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 45-17.5 94.5t-51 103Q698-301 648-244T533-127q-11 10-25 15t-28 5Zm0-453Zm0 80q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Z" />
                                                </svg>
                                                <h3 class="my-2 text-xl font-semibold text-gray-900">Alamat</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="my-2 text-md font-normal text-gray-500">Ini mencakup alamat lengkap Anda
                                        yang
                                        digunakan untuk pengiriman barang</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div x-show="openTab === 2"
                    class="transition-all duration-300 bg-white p-4 rounded-lg shadow-md border-l-4 border-blue-600">
                    <h2 class="text-2xl font-semibold mb-2 text-blue-600">Cart</h2>
                    <p class="text-gray-700">Proin non velit ac purus malesuada venenatis sit amet eget lacus. Morbi
                        quis
                        purus id ipsum ultrices aliquet Morbi quis.</p>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
