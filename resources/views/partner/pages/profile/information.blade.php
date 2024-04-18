@extends('partner.layouts.app')

@section('title', 'Dashboard | Order')

@section('content')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            @if (session('success'))
                <div id="alert-dissmiss"
                    class="font-regular mb-4 flex flex-wrap justify-between items-center w-full rounded-lg bg-green-500 p-4 text-base leading-5 text-white opacity-100"
                    data-dismissible="alert">
                    <div class="mr-12 items-center">{{ session('success') }}</div>
                    <div id="dismiss-button"
                        class="top-2.5 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
                        data-dismissible-target="alert">
                        <button role="button" class="w-max rounded-lg p-1" data-alert-dimissible="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endif
            <form action="{{ route('partner.account.information.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div>
                        <label for="nama_partner" class="text-sm font-medium text-gray-700 block mb-2">Nama Partner</label>
                        <input value="{{ $partners->nama_partner }}" type="text" id="nama_partner" name="nama_partner"
                            placeholder="Nama parnter" class="border p-2 rounded w-full">
                    </div>
                    <div>
                        <label for="nama_perusahaan_partner" class="text-sm font-medium text-gray-700 block mb-2">Nama
                            perusahaan partner</label>
                        <input value="{{ $partners->nama_perusahaan_partner }}" type="text" id="nama_perusahaan_partner"
                            name="nama_perusahaan_partner" placeholder="nama_perusahaan_partner"
                            class="border p-2 rounded w-full">
                    </div>
                </div>
                <div class="mb-5">
                    <label for="lama_peternakan_berdiri" class="text-sm font-medium text-gray-700 block mb-2">
                        Lama peternakan berdiri
                    </label>
                    <input value="{{ $partners->lama_peternakan_berdiri }}" type="number" name="lama_peternakan_berdiri"
                        id="lama_peternakan_berdiri" placeholder="Lama peternakan berdiri" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="alamat_partner" class="text-sm font-medium text-gray-700 block mb-2">
                        Alamat partner
                    </label>
                    <input value="{{ $partners->alamat_partner }}" type="text" name="alamat_partner" id="alamat_partner"
                        placeholder="5" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="no_hp" class="text-sm font-medium text-gray-700 block mb-2">
                        Nomor Handphone
                    </label>
                    <input value="{{ $partners->no_hp }}" type="text" name="no_hp" id="no_hp"
                        placeholder="Masukkan nomor hp anda" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div>
                    <button type="submit""
                        class="w-full hover:shadow-form rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(function() {
                $('#dismiss-button').click(function(e) {
                    e.preventDefault(); // menghentikan default
                    $('#alert-dissmiss').addClass('hidden');
                });
            });
        </script>
    @endpush
@endsection
