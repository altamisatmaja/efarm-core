<!-- component -->
@extends('customer.layouts.app')

@section('title', 'Customer | Cart')

@section('content')
    <div class="container mx-auto px-2">
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
                        <a href="{{ route('customer.cart') }}"> Wishlist </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="flex justify-between">
            <div class="mt-2 mb-5">
                <h4 class=" text-2xl font-bold text-textbase">
                    Keranjang Anda
                </h4>
            </div>
            <h2 class="font-semibold text-2xl text-textbase">{{ $totalcart }} Item</h2>
        </div>
        <div class="sm:flex">
            <div class=" w-full">
                @foreach ($cart as $carts)
                    <div class="md:flex py-4">
                        @foreach ($carts->product as $products)
                        <div class="">
                            <img src="/uploads/{{ $products->gambar_hewan }}" alt="Black Leather Purse"
                                class="w-36 object-center object-cover md:block hidden rounded-lg" />
                            <img src="https://i.ibb.co/TTnzMTf/Rectangle-21.png" alt="Black Leather Purse"
                                class="md:hidden w-full h-full object-center object-cover rounded-lg" />
                        </div>
                        <div class="md:pl-3 w-full flex flex-col justify-between">
                                <p class="text-lg font-semibold text-textbase md:pt-0 pt-4">{{ $products->nama_product }}</p>
                                <p class="text-md text-textbase"><span class="font-semibold">Stok sisa</span> {{ $products->stok_hewan_ternak }} ekor</p>
                                <p class="text-md text-textbase"><span class="font-semibold">Gender hewan</span> {{ $products->gender_livestocks[0]['nama_gender'] }}</p>
                                <p class="w-96 text-md text-textbase"><span class="font-semibold">Dijual oleh</span> {{ $products->partner[0]['nama_partner'] }}</p>
                                <p class="w-96 text-md text-textbase"><span class="font-semibold">Berasal dari</span> {{ $products->partner[0]['provinsi_partner'] }}, {{ $products->partner[0]['kabupaten_partner'] }}, {{ $products->partner[0]['kecamatan_partner'] }}</p>
                                <div class="flex items-center justify-between pt-5">
                                    <div class="flex items-center space-x-4">
                                        @foreach ($carts->product as $product)
                                            @foreach ($product->categoryproduct as $categoryproduct)
                                                @foreach ($product->categorylivestocks as $categorylivestock)
                                                    <a href="{{ route('homepage.market.farm.product', [$categoryproduct->slug_kategori_product, $categorylivestock->slug, $product->slug_product]) }}"
                                                        class="text-md font-semibold px-8 py-2 bg-primarybase rounded-lg text-white cursor-pointer">Beli</a>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                        <form action="{{ route('customer.cart.destroy', $carts->id_product) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input hidden value="{{ $carts->id_product }}" name="id" type="text">
                                            <button type="submit"
                                                class="text-md font-semibold px-8 py-2 bg-white ring-1 ring-primarybase rounded-lg text-primarybase cursor-pointer">Hapus
                                            </button>
                                        </form>
                                    </div>
                                    <p class="text-2xl font-bold text-textbase">@currency($products->harga_product)</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
