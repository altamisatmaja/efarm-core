<!-- component -->
@extends('customer.layouts.app')

@section('title', 'Customer | Order')

@section('content')
<section class="md:py-0 bg-white text-zinc-900 relative overflow-hidden z-10 w-full">
    <div class="container px-4 mx-auto">
        <div class="flex w-full justify-center mx-auto">
            <div class="w-full">
                @foreach ($allorders as $allorder)
                    <div class="bg-white shadow-xl p-6 mt-6">
                        <div class="grid grid-cols-12 gap-6 items-center">
                            <div class="col-span-12 sm:col-span-3">
                                
                                {{-- @foreach ($allorder['order'] as $order) --}}
                                <h6 class="text-2xl leading-none font-bold">
                                    {{ $allorder['order']->status_pembayaran }}
                                </h6>
                                {{-- @endforeach --}}
                            </div>
                            <div class="col-span-12 sm:col-span-8 sm:col-start-5 sm:text-end">
                                <div class="flex items-center sm:justify-end">
                                    <div class="opacity-80 pr-3 border-r">
                                        <p class="mb-1">Order Date: {{ $allorder['order']->created_at }}</p>
                                        <p class="mb-1">
                                            Order Ref: {{ $allorder['order']->reference }}
                                            <a href="#!" class="text-blue-600">Copy</a>
                                        </p>
                                    </div>
                                    <div>
                                        <a href="#!" class="font-bold hover:text-blue-600 ml-3">Order Details
                                            <i class="fas fa-chevron-right sm:ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" />

                        <div class="grid grid-cols-12 gap-6">
                            <div class="col-span-12">
                                <div class="flex items-center">
                                    <a href="#!" class="opacity-80 hover:text-blue-600"><i
                                            class="fas fa-box mr-2"></i>TIEGOULI Store
                                        <i class="fas fa-chevron-right mx-2"></i>
                                    </a>
                                    <a href="#!" class="text-blue-600"><i class="fas fa-comment"></i></a>
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
                                    <h6 class="">
                                        JOYLOVE Sofa Chair Nordic Style Single Chair Designer
                                        Light Luxury Furniture Beauty
                                    </h6>
                                    <p class="my-2">
                                        US $4.17 <span class="opacity-75 ml-2">*1</span>
                                    </p>

                                    <i class="fas fa-user-shield opacity-75"></i>
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-3 mt-4">
                                <div class="flex flex-col items-center">
                                    <h6 class="font-bold">Total: US $ 18.75</h6>
                                    <button
                                        class="py-2.5 px-5 bg-blue-600 text-white hover:bg-opacity-90 w-full rounded-full mt-2">
                                        Pay Now
                                    </button>
                                    <!-- <button class="btn ezy__epprofile2-outline-btn w-100 rounded-pill mt-2">Delete</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="bg-white shadow-xl p-6 mt-6">
                    <div class="grid grid-cols-12 gap-6 items-center">
                        <div class="col-span-12 sm:col-span-3">
                            <div class="flex items-center">
                                <h6 class="text-2xl leading-none font-bold">Finished</h6>
                                <i class="fas fa-tablet-alt opacity-75 ml-3 mt-1"></i>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-8 sm:col-start-5 sm:text-end">
                            <div class="flex items-center sm:justify-end">
                                <div class="opacity-80 pr-3 border-r">
                                    <p class="mb-1">Order Date: Apr 22, 2022</p>
                                    <p class="mb-1">
                                        Order id: 81495384112609
                                        <a href="#!" class="text-blue-600">Copy</a>
                                    </p>
                                </div>
                                <div>
                                    <a href="#!" class="font-bold hover:text-blue-600 ml-3">Order Details
                                        <i class="fas fa-chevron-right sm:ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4" />

                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="flex items-center">
                                <a href="#!" class="opacity-80 hover:text-blue-600"><i
                                        class="fas fa-box mr-2"></i>TIEGOULI Store
                                    <i class="fas fa-chevron-right mx-2"></i>
                                </a>
                                <a href="#!" class="text-blue-600"><i class="fas fa-comment"></i></a>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-2 mt-4">
                            <div class="flex justify-center items-center h-full">
                                <img src="https://cdn.easyfrontend.com/pictures/chair1.png" alt=""
                                    class="max-w-full h-auto" />
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-7 lg:mr-8 mt-4">
                            <div>
                                <h6 class="">
                                    JOYLOVE Sofa Chair Nordic Style Single Chair Designer
                                    Light Luxury Furniture Beauty
                                </h6>
                                <p class="my-2">
                                    US $4.17 <span class="opacity-75 ml-2">*1</span>
                                </p>

                                <i class="fas fa-user-shield opacity-75"></i>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-3 mt-4">
                            <div class="flex flex-col items-center">
                                <h6 class="font-bold">Total: US $ 18.75</h6>
                                <button
                                    class="py-2.5 px-5 bg-blue-600 text-white hover:bg-opacity-90 w-full rounded-full mt-2">
                                    Add To Cart
                                </button>
                                <button
                                    class="py-2.5 px-5 border hover:bg-blue-600 hover:border-blue-600 hover:text-white w-full rounded-full mt-2">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
