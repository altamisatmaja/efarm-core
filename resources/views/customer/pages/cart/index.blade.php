<!-- component -->
@extends('customer.layouts.app')

@section('title', 'Customer | Cart')

@section('content')
    <div class="container mx-auto mt-5">
        <div class="flex justify-between border-b pb-8">
            <h1 class="font-semibold text-2xl">Keranjang anda</h1>
            <h2 class="font-semibold text-2xl">{{ $totalcart }} Item</h2>
        </div>
        <div class="sm:flex">
            <div class=" w-full">
                @foreach ($cart as $carts)
                    <div class="md:flex py-8 md:py-10 lg:py-8 border-t border-gray-50">
                        <div class="">
                            <img src="https://i.ibb.co/6gzWwSq/Rectangle-20-1.png" alt="Black Leather Purse"
                                class="h-full object-center object-cover md:block hidden" />
                            <img src="https://i.ibb.co/TTnzMTf/Rectangle-21.png" alt="Black Leather Purse"
                                class="md:hidden w-full h-full object-center object-cover" />
                        </div>
                        <div class="md:pl-3 w-full flex flex-col justify-between">
                            @foreach ($carts->product as $products)
                                <p class="text-xs leading-3 text-gray-800 md:pt-0 pt-4">{{ $products->nama_product }}</p>
                                <p class="text-xs leading-3 text-gray-600 pt-2">Height: 10 inches</p>
                                <p class="text-xs leading-3 text-gray-600 py-4">Color: Black</p>
                                <p class="w-96 text-xs leading-3 text-gray-600">Composition: 100% calf leather</p>
                                <div class="flex items-center justify-between pt-5">
                                    <div class="flex itemms-center">
                                        @foreach ($carts->product as $product)
                                            @foreach ($product->categoryproduct as $categoryproduct)
                                                @foreach ($product->categorylivestocks as $categorylivestock)
                                                    <a href="{{ route('homepage.market.farm.product', [$categoryproduct->slug_kategori_product, $categorylivestock->slug, $product->slug_product]) }}"
                                                        class="text-xs leading-3 underline text-gray-800 cursor-pointer">Beli</a>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                        <form action="{{ route('customer.cart.destroy', $carts->id_product) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input hidden value="{{ $carts->id_product }}" name="id" type="text">
                                            <button type="submit"
                                                class="text-xs leading-3 underline text-red-500 pl-5 cursor-pointer">Hapus
                                            </button>
                                        </form>
                                    </div>
                                    <p class="text-base font-black leading-none text-gray-800">Rp. 2.000.000</p>
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
