@extends('admin.layouts.app')

@section('title', 'Admin | Partner')

@section('content')
    <!-- component -->
    <div class="flex flex-col px-4">
        <div class="pb-5">
            <ol class="flex items-center gap-4">
                <li>
                    <div class="flex items-center text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a class="text-textbase" href="{{ route('admin.dashboard') }}">Beranda </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a class="text-textbase"  href="{{ route('admin.partner') }}"> Partner </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a class="text-textbase"
                            href="{{ route('admin.partner.show', $partner->id) }}"> Detail partner <span class="lowercase">{{ $partner->nama_partner }}</span> </a>
                    </div>
                </li>
            </ol>
        </div>
        <div
            class="flex flex-col dark:!bg-navy-800 dark:!shadow-none ">
            <div class="mt-2 mb-8">
                <h4 class="text-3xl font-bold text-textbase">
                    Data pengajuan akun partner 👋
                </h4>
            </div>
            <div class="grid grid-cols-2 gap-10 w-full">
                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Nama partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->nama_partner }}
                    </p>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Nama Perusahaan partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->nama_perusahaan_partner }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Provinsi partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->provinsi_partner }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Kabupaten partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->kabupaten_partner }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Kecamatan partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->kecamatan_partner }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Kelurahan partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->kelurahan_partner }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Alamat partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->alamat_partner }}
                    </p>
                </div>


                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Tanggal lahir partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->tanggal_lahir }}
                    </p>
                </div>


                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Lama peternakan partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->lama_peternakan_berdiri }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Jenis kelamin</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->jenis_kelamin }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Nomor Handphone</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->no_hp }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl py-4 shadow-3xl shadow-shadow-500">
                    <p class="text-xl font-semibold text-textbase">Latitude dan Longitude Partner</p>
                    <p class="text-lg mt-2 font-medium text-textbase">
                        {{ $partner->latitude }} dan {{ $partner->longitude }}
                    </p>
                </div>

                <div
                    class="flex flex-col rounded-2xl py-4">
                    <p class="text-xl font-semibold mb-3 text-textbase">Foto Profil</p>
                    <img src="/uploads/{{ $partner->foto_profil }}"
                        alt="fotoprofil-partner" class="lg:w-full w-full object-cover object-center rounded" />
                </div>

                <div
                    class="flex flex-col rounded-2xl py-4">
                    <p class="text-xl font-semibold mb-3 text-textbase">Foto peternakan</p>
                    <img src="/uploads/{{ $partner->foto_peternakan }}"
                        alt="fotopeternakan-partner" class="lg:w-full w-full object-cover object-center rounded" />
                </div>
            </div>
        </div>
        <div class="w-full mb-10 px-2">
            <form class="w-full" action="{{ route('admin.partner.from.verified.update', $partner->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button type="submit" class="justify-center w-full flex text-xl font-semibold bg-primarybase text-white py-3 rounded-lg">Verifikasi</button>
            </form>
        </div>

    </div>

    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
    @endpush
@endsection
