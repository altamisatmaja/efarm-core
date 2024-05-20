@extends('customer.pages.lacak.layouts.navigate')

@section('title', 'Customer | Semua')

@section('track')
    <section class="bg-white antialiased my-4">
        <div class="mx-auto max-w-screen-xl 2xl:px-0">
            @foreach ($allorders as $allorder)
                <h2 class="text-xl font-semibold mt-3 text-gray-900  sm:text-2xl">Pesanan Reference
                    #{{ $allorder['order']['reference'] }} ・ {{ $allorder['order']['status_pembayaran'] == 'Paid' ? 'Sudah dibayar' : 'Belum dibayar' }}</h2>
                <div class="mt-6 sm:mt-8 lg:flex lg:gap-8">
                    <div
                        class="w-full divide-y divide-gray-200 overflow-hidden rounded-lg border   lg:max-w-xl xl:max-w-2xl">
                        <div class="space-y-4 p-6">
                            <div class="flex items-center gap-6">
                                <a href="#" class="h-14 w-14 shrink-0">
                                    <img class="h-full w-full "
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                        alt="imac image" />
                                </a>
                                @foreach ($allorder['order_details'] as $orderdetails)
                                    <a href="#"
                                        class="min-w-0 flex-1 font-medium text-gray-900 hover:underline ">{{ $orderdetails['product']['nama_product'] }}</a>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between gap-4">

                                <p class="text-sm font-normal text-gray-500 "><span
                                        @foreach ($orderdetails['partner'] as $partner)
                                        class="font-medium text-gray-900 ">Dijual oleh </span>{{ $partner->nama_perusahaan_partner }}</p>
                                        @endforeach
                                        <div class="flex items-center justify-end gap-4">
                                        @foreach ($allorder['order_details'] as $orderdetails)
                                            <p class="text-base font-normal text-gray-900 ">
                                                x{{ $orderdetails->kuantitas_total }}</p>
                                            <p class="text-xl font-bold leading-tight text-gray-900 ">@currency($orderdetails['harga_total'])</p>
                                        @endforeach
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <p class="text-sm font-normal text-gray-500 "><span
                                    class="font-medium text-gray-900 ">Pengiriman dilakukan dengan </span>{{ $allorder['order']['pengiriman'] }}
                            </p>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            @foreach ($orderdetails['partner'] as $partner)
                            <p class="text-sm font-normal text-gray-500 "><span class="font-medium text-gray-900 ">Dikirim dari </span>{{ $partner->provinsi_partner }}, {{ $partner->kabupaten_partner }}, {{ $partner->kecamatan_partner }}, {{ $partner->kelurahan_partner }}, {{ $partner->alamat_partner }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="mt-6 grow sm:mt-8 lg:mt-0">
                    <div class="space-y-6 rounded-lg border border-gray-200 bg-white p-6 shadow-sm  ">
                        <h3 class="text-xl font-semibold text-gray-900 ">Keterangan</h3>

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
                                <h4 class="mb-0.5 text-base font-semibold text-gray-900 ">Pesanan {{ $allorder['order']['status'] }}</h4>
                                <p class="text-sm font-normal text-gray-500 ">Nama perusahaan partner</p>
                            </li>
                        </ol>

                        <div class="gap-4 sm:flex sm:items-center">
                            <a href""
                                class="w-full rounded-lg items-center flex justify-center  border border-gray-200 bg-white px-5  py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Lihat
                                detail</a>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
        </div>
    </section>
@endsection
