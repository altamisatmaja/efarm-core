<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>eFarm | Market</title>
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
            border: 0px;
            color: #27272a;
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

</head>

<body class="antialiased">
    <div>
        @include('includes.navbar')

        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-16">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="#" class="hover:underline hover:text-gray-600">Market</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <a href="#" class="hover:underline hover:text-gray-600">Hewan Ternak</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Kambing</span>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Hewan Jawa</span>
                </div>
            </div>
            <div>

            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                <div class="flex flex-col md:flex-row -mx-4">

                    {{-- for image --}}
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


                    {{-- for product  --}}
                    <div class="md:flex-1 px-4">

                        <h2 class="mb-2 leading-tight pt-2 tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
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
                                        <p class="text-gray-600 font-bold text-sm ml-1">
                                            {{ $hasil_reviews }}
                                            <span class="text-gray-500 font-normal">({{ $banyak_reviewers }}
                                                reviews)</span>
                                        </p>
                                    </span>
                                    <div
                                        class="ml-8 bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                                        {{ $product->terjual }} Terjual</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 my-4">
                            <div>
                                <div class="rounded-lg flex py-2 px-3">
                                    <span class="text-indigo-400 mr-1 mt-1">Rp</span>
                                    <span class="font-bold text-primarybase text-3xl"></span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <p class="text-green-500 text-xl font-semibold">Diskon 12%</p>
                                <p class="text-gray-400 line-through text-sm">Rp 2.222.222</p>
                            </div>
                        </div>
                        <div class="max-w-4xl bg-white w-full rounded-lg">
                            <div class="">
                                <h2 class="text-2xl ">
                                    Detail hewan
                                </h2>
                            </div>
                            <div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Gender hewan
                                    </p>
                                    @foreach ($product->gender_livestocks as $gender)
                                        <p>
                                            {{ $gender->nama_gender }}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Usia hewan
                                    </p>
                                    <p>
                                        {{ $product->lahir_hewan }} Bulan
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Berat hewan
                                    </p>
                                    <p>
                                        {{ $product->berat_hewan_ternak }} kg
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Stok
                                    </p>
                                    <p>
                                        {{ $product->stok_hewan_ternak }} ekor
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Deskripsi
                                    <p class="text-gray-500">
                                        {{ $product->deskripsi_product }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-px  bg-slate-400"></div>
                        </div>
                        <div class="max-w-4xl bg-white w-full rounded-lg">
                            <div class="">
                                <h2 class="text-2xl ">
                                    Pengiriman
                                </h2>
                            </div>
                            <div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Dikirim dari
                                    </p>
                                    @foreach ($product->partner as $partners)
                                        <p class="text-gray-500">
                                            {{ $partners->kabupaten_partner }}
                                        </p>
                                    @endforeach
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Melalui
                                    </p>
                                    <p class="text-gray-500">
                                        {{ $product->pengiriman }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-px  bg-slate-400"></div>
                        </div>
                        @foreach ($product->partner as $partner)
                            <div class="sm:flex sm:justify-between py-2">
                                <div class="flex items-center">
                                    <div class="flex items-start justify-start">
                                        <img class="h-12 w-12 rounded-full"
                                            src="/uploads/{{ $partner->foto_profil }}" alt="">
                                        <div class="ml-2 flex flex-col">
                                            <h3 class="text-lg text-gray-800 font-medium">{{ $partner->nama_partner }}
                                            </h3>
                                            <span class="text-gray-600">Peternakan
                                                {{ $partner->nama_perusahaan_partner }}</span>

                                            <div
                                                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                                <p class="text-gray-600">
                                                    Bergabung pada
                                                </p>
                                                <p>
                                                    {{ $partner->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                            <div
                                                class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                                <p class="text-gray-600">
                                                    Lama peternakan berdiri
                                                </p>
                                                <p>
                                                    {{ $partner->lama_peternakan_berdiri }} tahun
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 sm:mt-0">
                                    <button
                                        class="flex items-center text-white bg-blue-600 rounded px-2 py-1 hover:bg-blue-500 focus:outline-none focus:shadow-outline">
                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        <span class="ml-1 text-sm">hubungi</span>
                                    </button>
                                </div>
                            </div>
                        @endforeach

                        <div class="w-full mx-auto">
                            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                            <div class="flex flex-col justify-start items-start w-full">
                                <div class="flex text-2xl font-semibold">
                                    <h1>Testimoni dari pembeli lain</h1>
                                </div>
                            </div>

                            @foreach ($testimonials as $testimonial)
                                <div class='flex flex-col items-center justify-center'>
                                    <div class="rounded-xl mt-5 w-full bg-white">
                                        <div class="flex w-full items-center justify-between pb-3">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                                </div>
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
                                                        <div
                                                            class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                                        </div>
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
                                    @endif
                            @endforeach

                        </div>
                    </div>



                    {{-- for checkout --}}
                    <div class="w-full md:w-4/12 bg-white md:block mb-2">
                        <div class="py-2 pl-8 pr-10 space-y-3 sticky top-0">
                            <div class="h-full rounded-lg border bg-white p-6 shadow-md md:mt-0">
                                <div class="mb-2 flex justify-between">
                                    <p class="text-gray-700 text-xl font-semibold">Atur jumlah dan catatan</p>
                                </div>
                                <hr class="my-4" />
                                <p>Atur kuantitas</p>
                                <form action="{{ route('customer.checkout.pre') }}" method="POST">
                                    @csrf
                                    <div class="mb-2 flex justify-between">
                                        <div class="custom-number-input h-10 w-32">
                                            <div
                                                class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
                                                <button data-action="decrement" type="button"
                                                    class=" bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                                    <span class="m-auto text-2xl font-thin">-</span>
                                                </button>
                                                <input type="number"
                                                    class="focus:outline-none text-center w-full bg-gray-300 font-semibold text-md hover:text-black focus:text-black  md:text-basecursor-default flex items-center text-gray-700  outline-none"
                                                    name="kuantitas" value="0"></input>
                                                <button data-action="increment" type="button"
                                                    class="bg-gray-300 text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer">
                                                    <span class="m-auto text-2xl font-thin">+</span>
                                                </button>
                                                <input hidden name="random" value="{{ now()->timestamp }}"
                                                    type="text">
                                                <input hidden name="slug_product"
                                                    value="{{ $product->slug_product }}" type="text">
                                            </div>
                                        </div>
                                        <p class="text-gray-700">Stok 2222</p>
                                    </div>

                                    <div class="mb-2 flex justify-between">
                                        <p class="text-gray-700">Subtotal</p>
                                        <p class="text-gray-700">@currency($product->harga_product)</p>
                                    </div>
                                    <hr class="my-4" />

                                    {{-- <a href="{{ route('customer.checkout', [$product->slug_product]) }}"> --}}
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
                                <div class="grid grid-cols-2 divide-x mt-2">
                                    <div class="flex items-center justify-center">Chat</div>
                                    <div class="flex items-center justify-center">Share</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- component -->


            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="relative flex items-end font-bold mt-6">
                    <h2 class="text-2xl">Hewan ternak lain</h2>
                </div>
                {{-- @include('components.new') --}}
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
</body>

</html>
