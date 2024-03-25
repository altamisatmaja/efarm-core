<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>eFarm - Jual beli hewan ternak</title>
</head>

<body>
    @include('includes.information')
    @include('includes.navbar')
    <div
        class="w-screen h-screen overflow-hidden relative before:block before:absolute before:h-full before:w-full before:top-0 before:left-0 before:z-10 before:opacity-30">
        <img src="{{ asset('hero-beranda.png') }}" class="absolute top-0 left-0 min-h-full ob" alt="">
        <div class="relative z-20 max-w-screen-lg mx-auto grid grid-cols-12 h-full items-center">
            <div class="col-span-6 p-4 bg-white rounded">
                <h1 class="text-textbase font-extrabold text-5xl mb-2">Menyediakan Layanan Sesuai Kebutuhan Anda
                </h1>
                <p class="text-textbase text-base mb-2">
                    Kelola peternakan, jual hewan ternak, beli hewan ternak dengan berbagai layanan yang tersedia di
                    eFarm.
                </p>
                <div class="inline-flex w-full">
                    <button
                        class="middle none center mr-3 w-full  border bg-primarybase rounded-lg hover:border hover:bg-white hover:text-primarybase border-primarybase text-white py-2.5 px-9 font-sans text-xs font-bold uppercase transition-all focus:ring focus:ring-primarybase active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-dark="true">
                        Beli hewan ternak
                    </button>
                    <button
                        class="middle none center mr-3 w-full rounded-lg border hover:bg-primarybase hover:text-white border-primarybase py-2.5 px-9 font-sans text-xs font-bold uppercase text-primarybase transition-all focus:ring focus:ring-primarybase active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        data-ripple-dark="true">
                        Jadi partner
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-6">
        <div class="h-64 rounded-md overflow-hidden bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1577655197620-704858b270ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=144')">
            <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                <div class="px-10 max-w-xl">
                    <h2 class="text-2xl text-white font-semibold">Sport Shoes</h2>
                    <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore
                        facere provident molestias ipsam sint voluptatum pariatur.</p>
                    <button
                        class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                        <span>Shop Now</span>
                        <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    

</body>

</html>
