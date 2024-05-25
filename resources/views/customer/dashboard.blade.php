@extends('customer.layouts.app')

@section('title', 'Customer | Account')

@section('content')
    <div class="flex flex-col text-textbase justify-center items-center w-full">
        <div
            class="relative flex flex-col items-center rounded-[20px] w-full mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 p-3">
            <div class="mt-2 mb-8 w-full">
                <h4 class="px-2 text-xl font-bold text-navy-700">
                    Informasi Anda
                </h4>
            </div>
            <div class="grid grid-cols-2 gap-4 w-full">
                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Nama</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $user->nama }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Nomor telepon</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $user->no_telp ?? 'Nomor telepon anda masih belum diisi' }}
                    </p>
                </div>
            </div>

            <div class="mt-2 mb-8 w-full">
                <h4 class="px-2 text-xl font-bold text-navy-700">
                    Informasi Akun Anda
                </h4>
            </div>
            <div class="grid grid-cols-2 gap-4 w-full">
                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Username</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $user->username }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Email</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $user->email }}
                    </p>
                </div>
            </div>

            <div class="mt-2 mb-8 w-full">
                <h4 class="px-2 text-xl font-bold text-navy-700">
                    Informasi Alamat
                </h4>
            </div>
            <div class="grid grid-cols-2 gap-4 w-full">
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Provinsi</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $user->provinsi_user }}
                    </p>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Kabupaten</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $user->kabupaten_user }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Kelurahan</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $user->kecamatan_user }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-sm text-gray-600">Kelurahan</p>
                    <p class="text-base font-medium text-navy-700">
                        {{ $user->kelurahan_user }}
                    </p>
                </div>
            </div>

        </div>
    </div>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
