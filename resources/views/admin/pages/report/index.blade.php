<style>
    [x-cloak] {
        display: none;
    }
</style>

@extends('admin.layouts.app')

@section('title', 'Dashboard | Laporan')

@section('content')
    <section class="container mx-auto px-4 pb-5g w-full">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <h3 class="font-bold text-textbase text-2xl">📑 Laporan transaksi</h3>
                    <h2 class="font-medium mt-5 text-textbase text-xl">Silahkan pilih jangkauan hari</h2>
                    <form action="{{ route('admin.report.range') }}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-6 lg:grid-cols-4 mt-2">
                            <div>
                                <label for="dari" class="block mb-2 text-lg font-medium text-textbase ">Dari</label>
                                <input class="rounded-lg w-full" type="date" name="dari" id="dari"
                                    value="{{ request()->input('dari') }}">
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-lg font-medium text-textbase ">Last name</label>
                                <input class="rounded-lg w-full" type="date" name="sampai" id="sampai"
                                    value="{{ request()->input('sampai') }}">
                            </div>
                            <div>
                                <label for="submit" class="block mb-2 text-lg font-medium text-textbase invisible">Cari</label>
                                <button type="submit"
                                    class="justify-center w-full flex text-lg px-10 font-semibold bg-primarybase border border-1 border-primarybase text-white py-1.5 rounded-lg">Cari</button>
                            </div>
                            <div>
                                <label for="button" class="block mb-2 text-lg font-medium text-textbase invisible">Bersihkan</label>
                                <a href="{{ route('admin.report.list') }}">
                                    <button type="button"
                                        class="justify-center w-full flex text-lg px-10 font-semibold bg-white border-1 border border-primarybase text-primarybase py-1.5 rounded-lg">Bersihkan</button>
                                </a>
                            </div>
                        </div>
                    </form>
                    @if (request()->input('dari'))
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
                                            Nama Partner Penjual
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Jumlah Dibeli
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama Product
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Harga Product
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Total Dibeli
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($reports as $report)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <span>{{ $loop->iteration }}</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->nama_partner }}
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->total_qty }} ekor
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->nama_product }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">@currency($report->harga_product)
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $report->total_qty }} ekor</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
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
                                            Nama Partner Penjual
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Jumlah Dibeli
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama Product
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Harga Product
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Total Dibeli
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($reports as $report)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <span>{{ $loop->iteration }}</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->nama_partner }}
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->total_qty }} ekor
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->nama_product }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">@currency($report->harga_product)
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $report->total_qty }} ekor</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script></script>
    @endpush
@endsection
