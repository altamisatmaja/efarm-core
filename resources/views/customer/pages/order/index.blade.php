<!-- component -->
@extends('customer.layouts.app')

@section('title', 'Customer | Order')

@section('content')
    <section class="md:py-0 bg-white text-zinc-900 relative overflow-hidden z-10 w-full">
        <div class="container px-4 mx-auto">
            <div class="flex w-full justify-center mx-auto">
                <div class="w-full">
                    @foreach ($allorders as $allorder)
                        {{-- {{ $allorder['order_details'] }} --}}
                        <div class="bg-white shadow-xl p-6 mt-6">
                            <div class="grid grid-cols-12 gap-6 items-center">
                                <div class="col-span-12 sm:col-span-3">
                                    <h6 class="text-2xl leading-none font-bold">
                                        {{ $allorder['order']->status_pembayaran == 'Paid' ? 'Sudah dibayar' : 'Belum dibayar' }}
                                    </h6>
                                </div>
                                <div class="col-span-12 sm:col-span-8 sm:col-start-5 sm:text-end">
                                    <div class="flex items-center sm:justify-end">
                                        <div class="opacity-80 pr-3 border-r">
                                            <p class="mb-1">Order Date: {{ $allorder['order']->created_at }}</p>
                                            <p class="mb-1">
                                                Order Ref: {{ $allorder['order']->reference }}
                                                <a href="#!" class="text-primarybase">Copy</a>
                                            </p>
                                        </div>
                                        <div>
                                            <a href="#!" class="font-bold hover:text-primarybase ml-3">Order Details
                                                <i class="fas fa-chevron-right sm:ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4" />

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="flex items-center">
                                        @foreach ($allorder['order_details'] as $partners)
                                            <p class="text-lg font-semibold">
                                                {{ $partners->partner[0]['nama_perusahaan_partner'] }}
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-2 mt-4">
                                    <div class="flex justify-center items-center h-full">
                                        <img src="https://cdn.easyfrontend.com/pictures/chair2.png" alt=""
                                            class="max-w-full h-auto" />
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-7 lg:mr-8 mt-4">
                                    <div>
                                        @foreach ($allorder['order_details'] as $products)
                                            <p class="text-lg font-semibold">{{ $products->product->nama_product }}
                                            </p>
                                        @endforeach
                                        <p class="my-2">
                                            US $4.17 <span class="opacity-75 ml-2">*1</span>
                                        </p>

                                        <i class="fas fa-user-shield opacity-75"></i>
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3 mt-4">
                                    <div class="flex flex-col items-center">
                                        @foreach ($allorder['order_details'] as $products)
                                            <h6 class="font-bold">Total: {{ $products['harga_total'] }}</h6>
                                        @endforeach
                                        <button
                                            class="py-2.5 px-5 bg-primarybase text-white hover:bg-opacity-90 w-full rounded-lg mt-2">
                                            Pay Now
                                        </button>
                                        <!-- <button class="btn ezy__epprofile2-outline-btn w-100 rounded-pill mt-2">Delete</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
