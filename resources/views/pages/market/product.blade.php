@extends('includes.app')

@section('title', 'eFarm | Market')

@section('content')
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .custom-number-input input:focus {
            outline: none !important;
        }

        .custom-number-input button:focus {
            outline: none !important;
        }

        .carousel-cell {
            width: 150px;
            height: 150px;

            margin-right: 24px;
            counter-increment: carousel-cell;
        }

        .carousel-cell:before {
            display: block;
            width: 20%;
        }

        .flickity-slider {
            position: absolute;
            width: 100%;
            height: 100%;
            left: -260px !important;
        }

        .flickity-button {
            position: absolute !important;
            inset: 0 !important;
            top: 50% !important;
            left: 80% !important;
            background: white;
        }

        .flickity-prev-next-button:hover {
            background-color: #27272a;
            color: white;
        }

        .flickity-prev-next-button.previous {
            visibility: hidden;
        }

        .flickity-prev-next-button.next {
            margin-left: 50px;
            width: 48px;
            height: 48px;
            visibility: hidden;
        }

        .flickity-enabled.is-draggable .flickity-viewport {
            cursor: none;
            cursor: default;
        }

        .flickity-prev-next-button .flickity-button-icon {
            margin-left: 2px;
            margin-top: 2px;
            width: 24px;
            height: 24px;
        }
    </style>
    <div>
        <div class="py-5">
            <div class="px-12 container mx-auto">
                <ol class="flex items-center gap-4">
                    <li>
                        <div
                            class="flex items-center text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                            <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
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
                            <a href="{{ route('homepage.market') }}"> Market </a>
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
                            <a href="{{ route('homepage.market.category', [$categoryproduct->slug_kategori_product]) }}">
                                {{ $categoryproduct->nama_kategori_product }} </a>
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
                            <a href="{{ route('homepage.market.farm', [$categorylivestock->slug]) }}">
                                {{ $categorylivestock->nama_kategori_hewan }} </a>
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
                            <a
                                href="{{ route('homepage.market.farm.product', [$categoryproduct->slug_kategori_product, $categorylivestock->slug, $product->slug_product]) }}">
                                {{ $product->nama_product }} </a>
                        </div>
                    </li>
                </ol>
            </div>
            <div>

            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="flex flex-col md:flex-row -mx-4">
                    <div class="lg:w-4/12 md:w-4/12 sm:w-full bg-white">
                        <div class="py-2 pl-8 pr-10 space-y-3 sticky top-0">
                            <div class="md:flex-1 px-4">
                                <div x-data="{ image: 1 }" x-cloak>
                                    <div class="bg-cover h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                                        <div x-show="image === 1"
                                            class="bg-cover h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center"
                                            style="background-image: url('/uploads/{{ $product->gambar_hewan }}'); background-size: cover;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="md:flex-1 px-4">
                        <h2 class="mb-2 leading-tight pt-2 tracking-tight font-bold text-textbase text-2xl md:text-3xl">
                            {{ $product->nama_product }}</h2>
                        <div class="flex justify-between item-center">
                            <p class="text-gray-500 font-medium hidden md:block">
                                {{ $categorylivestock->nama_kategori_hewan }}</p>
                            <div class="flex justify-between item-center">
                                <div class="flex mb-4 items-center">
                                    <span class="flex items-center">
                                        @php
                                            $rating = (int) $hasil_reviews;
                                            if ($rating) {
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500"';
                                                        echo ' viewBox="0 0 24 24">';
                                                        echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                                        echo '></path>';
                                                        echo '</svg>';
                                                    } else {
                                                        echo '<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500"';
                                                        echo ' viewBox="0 0 24 24">';
                                                        echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                                        echo '></path>';
                                                        echo '</svg>';
                                                    }
                                                }
                                            } else {
                                                for ($i = 1; $i <= 5; $i++) {
                                                    echo '<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500"';
                                                    echo ' viewBox="0 0 24 24">';
                                                    echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                                    echo '></path>';
                                                    echo '</svg>';
                                                }
                                            }
                                        @endphp
                                        <p class="text-textbase font-bold text-sm ml-1">
                                            {{ $hasil_reviews }}
                                            <span class="text-gray-500 font-normal">({{ $banyak_reviewers }}
                                                reviews)</span>
                                        </p>
                                    </span>
                                    <div
                                        class="ml-8 bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-textbase hidden md:block">
                                        {{ $product->terjual }} Terjual</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="flex-1">
                                <p class="text-green-500 text-4xl font-semibold">@currency($product->harga_product)</p>
                            </div>
                        </div>
                        <div class="max-w-4xl bg-white w-full rounded-lg">
                            <div class="">
                                <h2 class="text-2xl font-semibold my-4 text-textbase">
                                    Detail hewan
                                </h2>
                            </div>
                            <div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-textbase">
                                        Gender hewan
                                    </p>
                                    @foreach ($product->gender_livestocks as $gender)
                                    <p class="text-textbase font-semibold">
                                            {{ $gender->nama_gender }}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-textbase">
                                        Usia hewan
                                    </p>
                                    <p class="text-textbase font-semibold">
                                        {{ $product->lahir_hewan }} Bulan
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-textbase">
                                        Berat hewan
                                    </p>
                                    <p class="text-textbase font-semibold">
                                        {{ $product->berat_hewan_ternak }} kg
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-textbase">
                                        Stok
                                    </p>
                                    <p class="text-textbase font-semibold">
                                        {{ $product->stok_hewan_ternak }} ekor
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-textbase">
                                        Deskripsi
                                        <p class="text-textbase font-semibold">
                                        {{ $product->deskripsi_product }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col my-4">
                            <div class="h-px  bg-slate-400"></div>
                        </div>
                        <div class="max-w-4xl bg-white w-full rounded-lg">
                            <div class="">
                                <h2 class="text-xl font-semibold my-4 text-textbase">
                                    Pengiriman
                                </h2>
                            </div>
                            <div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-textbase">
                                        Dikirim dari
                                    </p>
                                    @foreach ($product->partner as $partners)
                                    <p class="text-textbase font-semibold">
                                            {{ $partners->kabupaten_partner }}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-textbase">
                                        Melalui
                                    </p>
                                    <p class="text-textbase font-semibold">
                                        {{ $product->pengiriman }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col my-4">
                            <div class="h-px  bg-slate-400"></div>
                        </div>
                        @foreach ($product->partner as $partner)
                            <div class="sm:flex sm:justify-between py-2">
                                <div class="flex items-center">
                                    <div class="flex items-start justify-start">
                                        <img class="h-12 w-12 mr-3 rounded-full"
                                            src="/uploads/{{ $partner->foto_profil }}" alt="">
                                        <div class="ml-2 flex flex-col">
                                            <h3 class="text-lg text-textbase font-semibold">{{ $partner->nama_partner }} ・
                                                <span class="text-textbase font-medium">Peternakan
                                                    {{ $partner->nama_perusahaan_partner }}</span>
                                            </h3>


                                            <div
                                                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                                <p class="text-textbase">
                                                    Bergabung pada
                                                </p>
                                                <p class="text-textbase font-semibold">
                                                    {{ $partner->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                            <div
                                                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                                <p class="text-textbase">
                                                    Lama peternakan berdiri
                                                </p>
                                                <p class="text-textbase font-semibold">
                                                    {{ $partner->lama_peternakan_berdiri }} tahun
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                        <div class="w-full mx-auto">
                            @if (empty($testimonials))
                                <div class="flex flex-col justify-start items-start w-full">
                                    <div class="flex text-2xl font-semibold">
                                        <h2 class="text-xl font-semibold my-4 text-textbase">
                                            Testimoni dari pembeli lain</h2>
                                    </div>
                                </div>
                            @else
                                <div class="flex flex-col justify-start items-start w-full">
                                    <div class="flex text-2xl font-semibold">
                                        <h2 class="text-xl font-semibold my-4 text-textbase">
                                            Testimoni dari pembeli lain</h2>
                                    </div>
                                    <p
                                        class="bg-primarybase px-5 py-2 text-center rounded-lg items-center w-full text-lg font-semibold text-white">
                                        Belum ada testimoni 🤭</p>
                                </div>
                            @endif

                            @foreach ($testimonials as $testimonial)
                                <div class='flex flex-col items-center justify-center'>
                                    <div class="rounded-xl mt-5 w-full bg-white">
                                        <div class="flex w-full items-center justify-between pb-3">
                                            <div class="flex items-center space-x-3">
                                                <img class="h-12 w-12 mr-3 rounded-full"
                                                    src="/uploads/{{ $testimonial->user->profile_photo_path }}"
                                                    alt="">
                                                <div class="text-lg font-bold text-slate-700">
                                                    {{ $testimonial->user->nama }}</div>
                                            </div>
                                            <div class="flex items-center space-x-8">
                                                <button
                                                    class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">{{ $testimonial->created_at->diffForHumans() }}</button>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-6">
                                            <div class="mb-3 text-xl font-bold">{{ $testimonial->nama_testimoni }}
                                            </div>
                                            <div class="text-sm text-neutral-600">{{ $testimonial->deskripsi }}</div>
                                        </div>
                                    </div>

                                </div>
                                @if ($testimonial->testimonial_reply)
                                    <div class='flex flex-col items-start justify-center'>
                                        <p class="text-textbase font-medium items-start w-full">Balasan dari
                                            penjual</p>
                                        <div class="ml-8 rounded-xl mt-5 w-full bg-white">
                                            <div class="flex w-full items-center justify-between pb-3">
                                                <div class="flex items-center space-x-3">
                                                    <div class="flex items-center space-x-3">
                                                        <img class="h-12 w-12 mr-3 rounded-full"
                                                            src="/uploads/{{ $testimonial->user->profile_photo_path }}"
                                                            alt="">
                                                        <div class="text-lg font-bold text-slate-700">
                                                            {{ $testimonial->user->nama }}</div>
                                                    </div>
                                                    <div class="flex items-center space-x-8">
                                                        <button
                                                            class="rounded-2xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">{{ $testimonial->created_at->diffForHumans() }}</button>
                                                    </div>
                                                </div>

                                                <div class="mt-4 mb-6">
                                                    <div class="mb-3 text-xl font-bold">
                                                        {{ $testimonial->nama_testimoni }}</div>
                                                    <div class="text-sm text-neutral-600">
                                                        {{ $testimonial->deskripsi }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <p class="text-textbase">Belum ada testimoni</p>
                                @endif
                            @endforeach

                        </div>
                    </div>



                    {{-- for checkout --}}
                    <div class="w-full md:w-4/12 bg-white md:block mb-2">
                        <div class="py-2 pl-8 pr-10 space-y-3 sticky top-0">
                            <div class="h-full rounded-lg border bg-white p-6 shadow-md md:mt-0">
                                <div class="mb-2 flex justify-between">
                                    <p class="text-gray-700 text-xl font-semibold">Atur jumlah</p>
                                </div>
                                <hr class="my-4" />
                                <form action="{{ route('customer.checkout.pre') }}" method="POST">
                                    @csrf
                                    <div class="mb-2 flex justify-between items-center">

                                        <div class="custom-number-input h-10 w-32">
                                            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                <button data-action="decrement" type="button"
                                                    class=" bg-white text-textbase hover:text-gray-700 hover:bg-primarybase h-full w-20 rounded-l cursor-pointer outline-none">
                                                    <span class="m-auto text-2xl font-thin">-</span>
                                                </button>
                                                <input type="number" readonly
                                                    class="text-center border-primarybase  w-full bg-white font-semibold text-md  flex items-center text-textbase"
                                                    name="kuantitas" value="0"></input>
                                                <button data-action="increment" type="button"
                                                    class="bg-white text-textbase hover:text-gray-700 hover:bg-primarybase h-full w-20 rounded-r cursor-pointer">
                                                    <span class="m-auto text-2xl font-thin">+</span>
                                                </button>
                                                <input hidden name="random" value="{{ now()->timestamp }}"
                                                    type="text">
                                                <input hidden name="slug_product" value="{{ $product->slug_product }}"
                                                    type="text">
                                            </div>
                                        </div>
                                        <p class="text-textbase font-semibold">Stok {{ $product->stok_hewan_ternak }}</p>

                                    </div>
                                    <hr class="my-4" />

                                    {{-- <a href="{{ route('customer.checkout', [$product->slug_product]) }}"> --}}
                                    <p class="text-red-500 mt-2">{{ session('status') }}</p>
                                    <button type="submit"
                                        class="mt-3 hover:shadow-form w-full border bg-primarybase hover:bg-primarybase hover:text-white border-white rounded-md py-3 px-8 text-center text-base font-semibold text-white">
                                        Beli sekarang
                                    </button>
                                    {{-- </a> --}}
                                </form>


                                <form action="{{ route('customer.cart.store', $product->id) }}" method="POST">
                                    @csrf
                                    <input hidden value="{{ $product->id }}" name="id_product" type="text">
                                    <button type="submit""
                                        class="mt-3 hover:shadow-form w-full border hover:bg-primarybase hover:text-white border-primarybase rounded-md py-3 px-8 text-center text-base font-semibold text-primarybase">
                                        Tambah ke wishlist
                                    </button>
                                </form>
                                {{-- <div class="grid grid-cols-2 divide-x mt-2">
                                    <div class="flex items-center justify-center">Chat</div>
                                    <div class="flex items-center justify-center">Share</div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- component -->
            <div class="w-full container mx-auto sm:px-6 lg:px-8">
                <div class="relative flex items-end font-bold mt-6">
                    <h2 class="text-2xl text-textbase">Hewan ternak terbaru</h2>
                </div>
                <main class="w-full my-5">
                    <div class="container">
                        <div class="grid gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                            @foreach ($productstakes as $producttake)
                                <a
                                    href="/market/buy/{{ $producttake->slug_category_product }}/{{ $producttake->slug_category_livestock }}/{{ $producttake->slug_product }}">
                                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                        <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                            style="background-image: url('/uploads/{{ $producttake->gambar_hewan }}')">
                                        </div>

                                        <div class="px-5 py-3">
                                            <h3 class="text-gray-700 text-lg font-semibold">
                                                {{ $producttake->nama_product }}</h3>
                                            <div>
                                                <h2 class="text-primarybase text-lg font-semibold">Rp
                                                    {{ number_format($producttake->harga_product) }}</h2>
                                                <div class="flex gap-2">
                                                    <div class="px-2 py-1 rounded-md bg-primarybase">
                                                        <p class="text-white text-sm">
                                                            {{ $producttake->gender }}
                                                        </p>
                                                    </div>
                                                    <div class="px-2 py-1 rounded-md bg-primarybase">
                                                        <p class="text-white text-sm">{{ $producttake->nama_jenis_hewan }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="text-gray-700 text-md font-medium mt-4">
                                                    {{ $producttake->lokasi }}</p>
                                                <div class="flex items-center">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $producttake->average_rating)
                                                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                </path>
                                                            </svg>
                                                        @else
                                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                </path>
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                    <p class="text-gray-700 text-sm font-medium">
                                                        ({{ $producttake->total_reviews ?? 0 }})</p>
                                                </div>
                                                <p class="text-gray-700 text-sm font-medium mb-4">
                                                    {{ $producttake->terjual }} Terjual</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <script>
        let menu = document.getElementById("menu");
        let closeIcon = document.getElementById("closeIcon");
        let openIcon = document.getElementById("openIcon");
        const showMenu = (flag) => {
            if (flag) {
                menu.classList.toggle("hidden");
                closeIcon.classList.toggle("hidden");
                openIcon.classList.toggle("hidden");
            }
        };

        let menu2 = document.getElementById("menu2");
        let closeIcon2 = document.getElementById("closeIcon2");
        let openIcon2 = document.getElementById("openIcon2");
        const showMenu2 = (flag) => {
            if (flag) {
                menu2.classList.toggle("hidden");
                closeIcon2.classList.toggle("hidden");
                openIcon2.classList.toggle("hidden");
            }
        };

        function decrement(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);

            if (value > 0) {
                value--;
                target.value = value;
            }
        }




        function increment(e) {
            const btn = e.target.parentNode.parentElement.querySelector(
                'button[data-action="decrement"]'
            );
            const target = btn.nextElementSibling;
            let value = Number(target.value);
            value++;
            target.value = value;
        }

        const decrementButtons = document.querySelectorAll(
            `button[data-action="decrement"]`
        );

        const incrementButtons = document.querySelectorAll(
            `button[data-action="increment"]`
        );

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", decrement);
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", increment);
        });
    </script>
    @push('js')
    @endpush
@endsection
