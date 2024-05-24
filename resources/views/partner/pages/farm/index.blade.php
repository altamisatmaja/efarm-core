@extends('partner.layouts.app')

@section('title', 'Dashboard | List Product')

@section('content')
    <section class="container px-4 mx-auto">
        @if (session('success'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                    data-dismissible="alert">
                    <div class="absolute top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="mt-px h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-8 mr-12">
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Berhasil
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('success') }}
                        </p>
                    </div>
                    <div data-dismissible-target="alert" data-ripple-dark="true"
                        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                        <div role="button" class="w-max rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
                    data-dismissible="alert">
                    <div class="absolute top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="mt-px h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-8 mr-12">
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Gagal
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('error') }}
                        </p>
                    </div>
                    <div data-dismissible-target="alert" data-ripple-dark="true"
                        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                        <div role="button" class="w-max rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="flex flex-col my-5">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="flex flex-wrap mb-3 items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-bold text-textbase text-xl">Kelola Peternakan</h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <a href="{{ route('partner.farm.create') }}">
                            <button
                                class="bg-primarybase text-white active:bg-primarybase text-md font-semibold px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Tambah hewan</button>
                        </a>
                    </div>
                </div>
                <div class="inline-block w-full py-2 align-middle">
                    <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 ">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        No
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Tanggal
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Nama Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Kategori Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Jenis Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Usia
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Kondisi

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Berat Badan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Deskripsi
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Gender
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($farms as $farm)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->created_at->format('d F Y') }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->nama_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->category_livestock->nama_kategori_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->type_livestocks->nama_jenis_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            @if ($farm->lahir_hewan->diffInMonths(now()) < 12)
                                                {{ $farm->lahir_hewan->diffInMonths(now()) }} bulan
                                            @else
                                                {{ floor($farm->lahir_hewan->diffInMonths(now()) / 12) }} tahun
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->condition_livestock->nama_kondisi_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->berat_badan_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->deskripsi_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->gender_livestocks->nama_gender }}</td>
                                        <td class="px-4 py-4 text-sm">
                                            <div class="flex items-center gap-x-2">
                                                <a href="{{ route('partner.farm.update', $farm->slug_farm) }}">
                                                    <button
                                                        class="text-textbase transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 -960 960 960" width="24px" fill="#444444">
                                                            <path
                                                                d="M200-200h57l391-391-57-57-391 391v57Zm-40 80q-17 0-28.5-11.5T120-160v-97q0-16 6-30.5t17-25.5l505-504q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L313-143q-11 11-25.5 17t-30.5 6h-97Zm600-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z" />
                                                        </svg>
                                                    </button>
                                                </a>
                                                <form onsubmit="return confirm('Apakah yakin ingin dihapus ?');"
                                                    action="{{ route('partner.farm.destroy', $farm->slug_farm) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 -960 960 960" width="24px" fill="#444444">
                                                            <path
                                                                d="M280-120q-33 0-56.5-23.5T200-200v-520q-17 0-28.5-11.5T160-760q0-17 11.5-28.5T200-800h160q0-17 11.5-28.5T400-840h160q17 0 28.5 11.5T600-800h160q17 0 28.5 11.5T800-760q0 17-11.5 28.5T760-720v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM400-280q17 0 28.5-11.5T440-320v-280q0-17-11.5-28.5T400-640q-17 0-28.5 11.5T360-600v280q0 17 11.5 28.5T400-280Zm160 0q17 0 28.5-11.5T600-320v-280q0-17-11.5-28.5T560-640q-17 0-28.5 11.5T520-600v280q0 17 11.5 28.5T560-280ZM280-720v520-520Z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
@endsection
