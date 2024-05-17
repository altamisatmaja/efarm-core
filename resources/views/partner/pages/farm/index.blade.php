@extends('partner.layouts.app')

@section('title', 'Dashboard | List Product')

@section('content')
    <!-- component -->
    
    <section class="container px-4 mx-auto">
        @if (session('status'))
            {{ session('status') }}
        @endif
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="flex flex-wrap mb-3 items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-xl">Kelola Peternakan</h3>
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
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        No
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Tanggal
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Nama Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Kategori Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Jenis Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Usia
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Kondisi

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Berat Badan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Deskripsi
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Gender
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($farms as $farm)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $farm->created_at->format('d F Y') }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $farm->nama_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $farm->category_livestock->nama_kategori_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $farm->type_livestocks->nama_jenis_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            @if ($farm->lahir_hewan->diffInMonths(now()) < 12)
                                                {{ $farm->lahir_hewan->diffInMonths(now()) }} bulan
                                            @else
                                                {{ floor($farm->lahir_hewan->diffInMonths(now()) / 12) }} tahun
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $farm->condition_livestock->nama_kondisi_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $farm->berat_badan_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $farm->deskripsi_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $farm->gender_livestocks->nama_gender }}</td>
                                        <td class="px-4 py-4 text-sm">
                                            <div class="flex items-center gap-x-6">
                                                <a href="{{ route('partner.farm.update', $farm->slug_farm) }}">
                                                    <button
                                                        class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Edit
                                                    </button>
                                                </a>
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('partner.farm.destroy', $farm->slug_farm) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')                
                                                    <button type="submit"
                                                        class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Hapus
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
@endsection
