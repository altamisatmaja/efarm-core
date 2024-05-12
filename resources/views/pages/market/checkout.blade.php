<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>eFarm | Checkout</title>
</head>

<body>
    <div>
        @include('includes.navbar')
        <div class="grid sm:px-10 lg:grid-cols-2 lg:px-20 xl:px-32">
            <div class="px-4 pt-8">
                <p class="text-xl font-medium">Order Summary</p>
                <p class="text-gray-400">Check your items. And select a suitable shipping method.</p>
                <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                    <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                        <img class="m-2 h-24 w-28 rounded-md border object-cover object-center"
                            src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                            alt="" />
                        <div class="flex w-full flex-col px-4 py-4">
                            <span class="font-semibold">Nike Air Max Pro 8888 - Super Light</span>
                            <span class="float-right text-gray-400">42EU - 8.5US</span>
                            <p class="text-lg font-bold">@currency($product->harga_product)</p>
                        </div>
                    </div>
                </div>
                <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
                    <p class="text-xl font-medium">Payment Details</p>
                    <p class="text-gray-400">Complete your order by providing your payment details.</p>
                    <div class="">
                        <!-- Total -->
                        <div class="mt-6 border-t border-b py-2">
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">Subtotal</p>
                                <p class="font-semibold text-gray-900">$399.00</p>
                            </div>
                            <div class="flex items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">Shipping</p>
                                <p class="font-semibold text-gray-900">$8.00</p>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Total</p>
                            <p class="text-2xl font-semibold text-gray-900">$408.00</p>
                        </div>
                    </div>
                </div>
                <p class="mt-8 text-lg font-medium">Shipping Methods</p>
                <form class="mt-5 grid gap-6">
                    <div class="relative">
                        <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
                        <span
                            class="peer-checked:border-gray-700 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                        <label
                            class="peer-checked:border-2 peer-checked:border-gray-700 peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4"
                            for="radio_1">
                            <img class="w-14 object-contain" src="/images/naorrAeygcJzX0SyNI4Y0.png" alt="" />
                            <div class="ml-5">
                                <span class="mt-2 font-semibold">Fedex Delivery</span>
                                <p class="text-slate-500 text-sm leading-6">Delivery: 2-4 Days</p>
                            </div>
                        </label>
                    </div>
                </form>
            </div>
            <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
                <p class="text-xl font-medium mb-3">Pilih metode pembayaran</p>
                <form class="" action="{{ route('customer.checkout.store') }}" method="POST">
                    <div class="grid gap-6 lg:grid-cols-2">
                        @csrf
                        @foreach ($channels as $channel)
                            @if ($channel->active)
                            {{-- <input type="text" name="method" value="{{ $channel->code }}"> --}}
                            <div class="relative w-full lg:w-full">
                                    <input hidden type="text" name="product_id" value="{{ $product->id }}">
                                    <input value="{{ $channel->code }}" class="peer hidden" id="radio_{{ $loop->iteration }}_payment" type="radio" name="method" />
                                    <input hidden type="text" name="kuantitas" id="kuantitas" value="2">
                                    <span
                                        class="peer-checked:border-blue-500 absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>

                                    <label
                                        class="peer-checked:border-2 peer-checked:border-blue-400 peer-checked:bg-blue-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4 pr-20"
                                        for="radio_{{ $loop->iteration }}_payment">
                                        <img class="w-1/3" src="{{ $channel->icon_url }}" alt="">
                                        <div class="ml-5">
                                            <span class="mt-2 font-semibold">{{ $channel->name }}</span>
                                        </div>
                                    </label>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <button type="submit"
                        class="mt-4 mb-8 w-full rounded-md bg-gray-900 px-6 py-3 font-medium text-white">Beli</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
