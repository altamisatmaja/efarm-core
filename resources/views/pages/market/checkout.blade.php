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
                <p class="text-xl font-medium">Ringkasan Pesanan</p>
                <p class="text-gray-400">Periksa terlebih dahulu pesanan anda. Kemudian pilih metode pembayaran</p>
                <div class="mt-8 space-y-3 rounded-lg border bg-white px-2 py-4 sm:px-6">
                    <div class="flex flex-col rounded-lg bg-white sm:flex-row">
                        <img class="m-2 h-24 w-28 rounded-md border object-cover object-center"
                            src="/uploads/{{ $product->gambar_hewan }}"
                            alt="" />
                        <div class="flex w-full flex-col px-4 py-4">
                            @foreach ($product->typelivestocks as $typelivestock)
                            <span class="font-semibold">{{ $product->nama_product }} - {{ $typelivestock->nama_jenis_hewan }}</span>
                            @endforeach
                            @foreach ($product->categoryproduct as $categoryproducts)
                            <span class="float-right text-gray-400">{{ $categoryproducts->nama_kategori_product }}</span>
                            @endforeach
                            <p class="text-lg font-bold">@currency($product->harga_product)</p>
                        </div>
                    </div>
                </div>
                <div class="mt-10 bg-gray-50 px-4 pt-8 lg:mt-0">
                    <p class="text-xl font-medium">Detail harga</p>
                    <p class="text-gray-400">Selesaikan pembayaran Anda setelah mengecek detail harga.</p>
                    <div class="">
                        <!-- Total -->
                        <div class="mt-6 border-t border-b py-2">
                            <div class="flex mt-2 items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">Kuantitas</p>
                                <p class="font-semibold text-gray-900">{{ $kuantitas }} ekor</p>
                            </div>
                            <div class="flex mt-2 items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">Harga produk</p>
                                <p class="font-semibold text-gray-900">@currency($product->harga_product)</p>
                            </div>
                            <div class="flex mt-2 items-center justify-between">
                                <p class="text-sm font-medium text-gray-900">Pengiriman</p>
                                <p class="font-medium text-gray-500">*Disesuaikan oleh Partner</p>
                            </div>
                        </div>
                        <div class="mt-6 flex mt-2 items-center justify-between">
                            <p class="text-sm font-medium text-gray-900">Total</p>
                            <p class="text-2xl font-semibold text-gray-900">@currency($total_harga)</p>
                        </div>
                    </div>
                </div>
                <p class="mt-8 text-lg font-medium">Metode pengiriman</p>
                <form class="mt-5 grid gap-6">
                    <div class="relative">
                        <input class="peer hidden" id="radio_1" type="radio" name="radio" checked />
                        <span class="peer-checked:border-primarybase absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white"></span>
                        <label class="peer-checked:border-2 peer-checked:border-primarybase peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border border-gray-300 p-4 items-center" for="radio_1">
                            <img class="w-10 object-contain" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLirWoWV1AiJNfOY69WI9A9VfleBE6W4JbsJHLcYsbtQ&s" alt="" />
                            <div class="ml-5">
                                <span class="mt-2 font-semibold">Pengiriman Internal</span>
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
                            <div class="relative w-full lg:w-full">
                                    <input hidden type="text" name="product_id" value="{{ $product->id }}">
                                    <input hidden type="text" name="slug_product" value="{{ $product->slug_product }}">
                                    <input value="{{ $channel->code }}" class="peer hidden" id="radio_{{ $loop->iteration }}_payment" type="radio" name="method" />
                                    <input hidden type="text" name="kuantitas" id="kuantitas" value="{{ $kuantitas }}">
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
                        class="mt-4 mb-8 w-full rounded-md bg-primarybase px-6 py-3 font-medium text-white">Beli</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
