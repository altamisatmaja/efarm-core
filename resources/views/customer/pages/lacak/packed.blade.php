@extends('customer.pages.lacak.layouts.navigate')

@section('title', 'Customer | Dikemas')

@section('track')
    <section class="bg-white antialiased my-4">
        <div class="pb-3">
            <ol class="flex items-center gap-4">
                <li class="cursor-pointer">
                    <div
                        class="flex items-center text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a href="/">Beranda </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('customer.account') }}"> Dashboard </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('customer.lacak.confirmed') }}"> Pengiriman yang sudah dikonfirmasi </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mx-auto max-w-screen-xl 2xl:px-0">
            @foreach ($allorders as $allorder)
                <h2 class="text-xl font-semibold mt-3 text-textbase  sm:text-2xl">Pesanan Reference
                    #{{ $allorder['order']['reference'] }} ・
                    {{ $allorder['order']['status_pembayaran'] == 'Paid' ? 'Sudah dibayar' : 'Belum dibayar' }}</h2>
                <div class="mt-6 sm:mt-8 lg:flex lg:gap-8">
                    <div
                        class="w-full divide-y divide-gray-200 overflow-hidden rounded-lg border   lg:max-w-xl xl:max-w-2xl">
                        <div class="space-y-4 p-6">
                            <div class="flex items-center gap-6">
                                @foreach ($allorder['order_details'] as $orderdetails)
                                <a href="#" class="h-14 w-14 shrink-0">
                                    <img class="h-full w-full "
                                        src="/uploads/{{ $orderdetails['product']['gambar_hewan'] }}"
                                        alt="imac image" />
                                </a>
                                    <a href="#"
                                        class="min-w-0 flex-1 font-medium text-textbase hover:underline ">{{ $orderdetails['product']['nama_product'] }}</a>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between gap-4">

                                <p class="text-sm font-normal text-gray-500 "><span
                                        @foreach ($orderdetails['partner'] as $partner)
                                class="font-medium text-textbase ">Dijual oleh </span>{{ $partner->nama_perusahaan_partner }}</p> @endforeach
                                        <div class="flex items-center justify-end gap-4">
                                        @foreach ($allorder['order_details'] as $orderdetails)
                                            <p class="text-base font-normal text-textbase ">
                                                x{{ $orderdetails->kuantitas_total }}</p>
                                            <p class="text-xl font-bold leading-tight text-textbase ">@currency($orderdetails['harga_total'])</p>
                                        @endforeach
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <p class="text-sm font-normal text-gray-500 "><span
                                    class="font-medium text-textbase ">Pengiriman dilakukan dengan
                                </span>{{ $allorder['order']['pengiriman'] }}
                            </p>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            @foreach ($orderdetails['partner'] as $partner)
                                <p class="text-sm font-normal text-gray-500 "><span
                                        class="font-medium text-textbase ">Dikirim dari
                                    </span>{{ $partner->provinsi_partner }}, {{ $partner->kabupaten_partner }},
                                    {{ $partner->kecamatan_partner }}, {{ $partner->kelurahan_partner }},
                                    {{ $partner->alamat_partner }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="mt-6 grow sm:mt-8 lg:mt-0">
                    <div class="space-y-6 rounded-lg border border-gray-200 bg-white p-6 shadow-sm  ">
                        <h3 class="text-xl font-semibold text-textbase ">Keterangan</h3>

                        <ol class="relative ms-3 border-gray-200 ">
                            <li class="mb-10 ms-6">
                                <span
                                    class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-gray-100 ring-8 ring-white  ">
                                    <svg class="h-4 w-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                                    </svg>
                                </span>
                                <h4 class="mb-0.5 text-base font-semibold text-textbase ">Pesanan
                                    {{ $allorder['order']['status'] }}</h4>
                                <p class="text-sm font-normal text-gray-500 ">Menunggu dikemas oleh penjual</p>
                            </li>
                        </ol>

                        {{-- <div class="gap-4 sm:flex sm:items-center">
                            <a href""
                                class="w-full rounded-lg items-center flex justify-center  border border-gray-200 bg-white px-5  py-2.5 text-sm font-medium text-textbase hover:bg-primarybase cursor-pointer hover:text-white focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Lihat
                                detail</a>
                        </div> --}}
                    </div>
                </div>
        </div>
        @endforeach
        </div>
    </section>
@endsection
