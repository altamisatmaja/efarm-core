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
    <title>eFarm | Partner</title>
    <style>
        * {
            font-family: Montserrat;
        }
    </style>
</head>

<body>
    <div>
        @include('includes.navbar')
        <!-- component -->
        <div class="relative isolate overflow-hidden bg-primarybase">
            <svg class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="50%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0"
                    fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)" />
            </svg>
            <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
                aria-hidden="true">
                <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                    style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-9 pb-24 sm:pb-32 lg:flex lg:px-16 lg:py-32">
                <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                    <h1 class="mt-10 text-4xl font-bold tracking-tight text-white sm:text-6xl">Menyediakan Layanan Sesuai Kebutuhan Anda</h1>
                    <p class="mt-6 text-lg leading-8 text-white">Kelola peternakan, jual hewan ternak, beli hewan ternak dengan berbagai layanan yang tersedia di eFarm</p>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-orange-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Jadi Partner</a>
                        <a href="#" class="text-sm font-semibold leading-6 text-white">Pelajari Lebih Lanjut <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
                <div
                    class="mx-auto -mt-20 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                    <div class="max-w-2xl flex-none sm:max-w-5xl lg:max-w-none">
                        <img src="{{ asset('aboutheader.png') }}" alt="efarm"
                            width="1700" height="1242"
                            class="w-[45rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
