<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <title>eFarm | Market</title>
    <style>
        * {
            font-family: Montserrat;
        }

        .text-primary {
            color: #f9b529;
        }

        .text-primary-lite {
            color: #fac251;
        }

        .text-secondary {
            color: #294356;
        }

        .text-secondary-lite {
            color: #d5dee5;
        }

        .bg-primary {
            background-color: #f9b529;
        }

        .bg-primary-lite {
            background-color: #fac251;
        }

        .bg-secondary {
            background-color: #294356;
        }

        .bg-secondary-lite {
            background-color: #d5dee5;
        }
    </style>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</head>

<body>
    <div>
        @include('includes.navbar')
        <!-- component -->
        <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

            <div class="flex justify-start item-start space-y-2 flex-col">
                <h1 class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">
                    Order #{{ $detail->reference }}</h1>
                <p class="text-base font-medium leading-6 text-gray-600">Dipesan pada: {{ $products->created_at->format('D M Y') }}
                </p>
            </div>
            <div
                class="mt-10 flex flex-col md:flex-row jusitfy-center items-stretch w-full xl:space-x-3 space-y-4 md:space-y-3 xl:space-y-0">
                <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                    <div
                        class="flex flex-col justify-start items-start bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                        <div
                            class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                            <div class="pb-4 md:pb-8 w-full md:w-40">
                                <img class="w-full hidden md:block" src="/uploads/{{ $products->gambar_hewan }}"
                                    alt="dress" />
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
                                        @foreach ($products->gender_livestocks as $gender)
                                            <p>
                                                {{ $gender->nama_gender }}
                                            </p> @endforeach
                                    </div>
                                    <div class="md:grid
        md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
    <p class="text-gray-600">
        Usia hewan
    </p>
    <p>
        {{ $products->lahir_hewan }} Bulan
    </p>
    </div>
    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
        <p class="text-gray-600">
            Berat hewan
        </p>
        <p>
            {{ $products->berat_hewan_ternak }} kg
        </p>
    </div>
    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
        <p class="text-gray-600">
            Stok
        </p>
        <p>
            {{ $products->stok_hewan_ternak }} ekor
        </p>
    </div>
    <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
        <p class="text-gray-600">
            Deskripsi
        <p class="text-gray-500">
            {{ $products->deskripsi_product }}
        </p>
    </div>
    </div>
    </div>
    </div>

    </div>

    <div
        class="flex justify-center md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
        <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 space-y-6">
            <h3 class="text-xl font-semibold leading-5 text-gray-800">Ringkasan</h3>
            <div class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                <div class="flex justify-between w-full">
                    <p class="text-base leading-4 text-gray-800">Kuantitas</p>
                    @foreach ($orderitems as $orderitem)
                        <p>{{ $orderitem->quantity }}</p>
                    @endforeach
                </div>
                <div class="flex justify-between items-center w-full">
                    <p class="text-base leading-4 text-gray-800">Harga Produk</p>
                    @foreach ($orderitems as $orderitem)
                        <p>{{ $orderitem->price }}</p>
                    @endforeach
                </div>
                <div class="flex justify-between items-center w-full">
                    <p class="text-base leading-4 text-gray-800">Pengiriman</p>
                    <p class="text-base leading-4 text-gray-600">*Disesuaikan oleh Partner</p>
                </div>
            </div>
            <div class="flex justify-between items-center w-full">
                <p class="text-base font-semibold leading-4 text-gray-800">Total</p>
                <p class="text-base font-semibold leading-4 text-gray-600">@currency($detail->amount)</p>
            </div>
        </div>
        <div class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 space-y-6">
            <h3 class="text-xl font-semibold leading-5 text-gray-800">Shipping</h3>
            <div class="flex justify-between items-start w-full">
                <div class="flex justify-center items-center space-x-4">
                    <div class="w-8 h-8">
                        <img class="w-full h-full" alt="logo"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLirWoWV1AiJNfOY69WI9A9VfleBE6W4JbsJHLcYsbtQ&s" />
                    </div>
                    <div class="flex flex-col justify-start items-center">
                        <p class="text-lg leading-6 font-semibold text-gray-800">DPD
                            Delivery<br /><span class="font-normal">Delivery with 24 Hours</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div
        class="bg-gray-50 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
        <h3 class="text-xl font-semibold leading-5 text-textbase">Metode pembayaran</h3>
        <div
            class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">

            <ul class="space-y-4 text-textbase list-disc list-inside">
                @foreach ($instruksi as $instruksi_pembayaran)
                    <li>
                        {{ $instruksi_pembayaran->title }}
                        @foreach ($instruksi_pembayaran->steps as $detail)
                            <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside">
                                <p>{{ $loop->iteration }}. {!! $detail !!}</p>
                            </ol>
                        @endforeach
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
    </body>

</html>
