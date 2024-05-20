@extends('customer.profile.layouts.index')

@section('title', 'Personal | Informasi')

@section('account')
    <div class="flex w-full flex-col py-10 mx-auto">
        <div class="flex items-center space-x-2 text-gray-400 text-sm">
            <a href="/personal/account" class="hover:underline hover:text-gray-600">Pengaturan</a>
            <span>
                <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
            <a href="/personal/account/infomation" class="hover:underline hover:text-gray-600">Biodata</a>
        </div>
        <div class="flex py-4">
            <h1 class="text-2xl font-semibold text-textbase">Biodata Diri</h1>
        </div>
        <div>
            <div class="mb-4">
                <label for="nama_lengkap" class="block text-lg font-medium text-gray-700 mb-2">Nama lengkap</label>
                <div class="flex flex-row">
                    <input readonly type="text" id="nama_lengkap"
                        class="shadow-sm w-full rounded-md px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="infokan" required>
                    <button class="w-1/3 rounded-lg bg-primarybase px-5 ml-4 text-white">Ubah</button>
                </div>
            </div>
            <div class="mb-4">
                <label for="nomor_handphone" class="block text-lg font-medium text-gray-700 mb-2">Nomor Handphone</label>
                <div class="flex flex-row">
                    <input readonly type="number" id="nomor_handphone"
                        class="shadow-sm w-full rounded-md px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="your@nomor_handphone.com" required>
                    <button class="w-1/3 rounded-lg bg-primarybase px-5 ml-4 text-white">Ubah</button>
                </div>
            </div>
            <div class="mb-4">
                <label for="tanggal_lahir" class="block text-lg font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                <div class="flex flex-row">
                    <input readonly type="date" id="tanggal_lahir"
                        class="shadow-sm w-full rounded-md px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="your@tanggal_lahir.com" required>
                    <button class="w-1/3 rounded-lg bg-primarybase px-5 ml-4 text-white">Ubah</button>
                </div>
            </div>
        </div>

    </div>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
