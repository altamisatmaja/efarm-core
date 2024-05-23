@extends('admin.layouts.app')

@section('title', 'Admin | Partner')

@section('content')
    <!-- component -->
    <section class="container px-4 mx-auto">
        <div class="flex flex-col">

            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="relative w-full mb-5 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-textbase text-xl">Daftar partner</h3>
                    </div>
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-textbase">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>No</span>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-textbase">
                                        Tanggal bergabung
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-textbase">
                                        Status
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-textbase">
                                        Nama Partner
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-textbase">
                                        Alamat
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-textbase">
                                        Aksi
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($partner as $partners)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-textbaser">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-textbaser">
                                            {{ $partners->created_at->diffForHumans() }}
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            @if ($partners->status == 'Sudah diverifikasi')
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-textbase rounded-full gap-x-2 bg-yellow-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#AAC14C">
                                                        <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $partners->status }}</h2>
                                                </div>
                                            @else
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                                                        <path
                                                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $partners->status }}</h2>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm text-textbaser">
                                            {{ $partners->nama_partner }}
                                        </td>
                                        <td class="px-4 py-4 text-sm text-textbaser">
                                            {{ $partners->alamat_partner }}, {{ $partners->kelurahan_partner }},
                                            {{ $partners->kecamatan_partner }}, {{ $partners->kabupaten_partner }},
                                            {{ $partners->provinsi_alamat }}
                                        </td>
                                        <td class=" text-textbase text-sm whitespace-nowrap">
                                            <a href="{{ route('admin.partner.show', $partners->id) }}">
                                                <button
                                                    class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                    Lihat Detail
                                                </button>
                                            </a>
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
