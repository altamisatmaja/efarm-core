<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>

@extends('admin.layouts.app')

@section('title', 'Dashboard | categorylivestock')

@section('content')
    <section class="w-full px-4 mx-auto">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="rounded-t mb-0 px-4 py-3 border-0">

                    @if (session('success'))
                        <div id="successMessage"
                            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                            <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                                data-dismissible="alert">
                                <div class="absolute top-4 left-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="mt-px h-6 w-6">
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
                                    <p
                                        class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                                        {{ session('success') }}
                                    </p>
                                </div>
                                <div data-dismissible-target="alert" data-ripple-dark="true"
                                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                                    <div role="button" class="w-max rounded-lg p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-xl">Jenis hewan ternak</h3>
                        </div>
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="{{ route('admin.typelivestock.create') }}">
                                <button
                                    class="bg-primarybase text-white active:bg-primarybase text-md font-semibold px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                    type="button">Tambah data</button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>No</span>
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Nama hewan ternak
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Nama kategori
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Deskripsi
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Gambar
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Slug
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($typelivestock as $typelivestocks)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500 text-center">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500 text-center">
                                            {{ $typelivestocks->nama_jenis_hewan }}
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 text-center">
                                            {{ $typelivestocks->categorylivestock->nama_kategori_hewan }}
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 text-center">
                                            {{ $typelivestocks->deskripsi_jenis_hewan }}
                                        </td>
                                        <td class="p-3 flex items-center justify-center">
                                            <div class="flex-shrink-0 rounded-lg overflow-hidden w-48 h-48">
                                                <img src="/uploads/{{ $typelivestocks->gambar_livestocks }}"
                                                    class="w-full h-full object-cover" alt="">
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 text-center">
                                            {{ $typelivestocks->slug_typelivestock }}
                                        </td>
                                        <td class="py-3.5 px-4 text-sm font-normal text-gray-500">
                                            <div class="gap-x-3">
                                                <div class="flex item-center justify-center">
                                                    <a href="{{ route('admin.typelivestock.edit', $typelivestocks->slug_typelivestocks) }}"
                                                        class="cursor-pointer">
                                                        <div
                                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </div>
                                                    </a>
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST"
                                                        action="{{ route('admin.typelivestock.destroy', $typelivestocks->slug_typelivestocks) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
    @endpush
@endsection
