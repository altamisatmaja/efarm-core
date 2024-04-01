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
    <title>eFarm - Jual beli hewan ternak</title>
    <style>
        * {
            font-family: Montserrat;
        }
    </style>
</head>

<body>
    <div>
        <div class="sticky top-0 z-50">
            <div>
                <div class="w-full bg-primarybase h-6 flex justify-center items-center">
                    <div class="">
                        <p class="text-white font-medium text-sm">Dipercaya oleh 412 mitra yang tersebar diseluruh
                            Indonesia</p>
                    </div>
                </div>
                <div class="w-full bg-white h-16 px-10 flex justify-between ">
                    <div class="w-full lg:w-30/6 xl:w-full  h-full flex items-center px-4 ">
                        <img class="rounded-lg w-32" src="{{ asset('logo.png') }}" alt="efarm logo" />
                    </div>
                    <div class="w-full  flex justify-center items-center">
                        <button
                            class="relative group transition-all duration-200 focus:overflow-visible w-max h-max p-2 overflow-hidden flex flex-row items-center justify-center bg-white gap-2 rounded-lg">
                            <span class="font-semibold text-textbase">
                                Layanan
                            </span>
                            <svg class="rotate-90 group-focus:rotate-180" xmlns="http://www.w3.org/2000/svg"
                                width="22" height="22" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m12 10.8l-3.9 3.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l4.6-4.6q.3-.3.7-.3t.7.3l4.6 4.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275z" />
                            </svg>
                            <div
                                class="absolute shadow-lg -bottom-52 left-0 w-full h-max p-2 bg-white border border-zinc-200 rounded-lg flex flex-col gap-2">
                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                    </svg>
                                    <p>Market</p>
                                </span>
                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                    </svg>
                                    <p>Partner</p>
                                </span>
                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 21q-3.775 0-6.387-2.613T3 12q0-3.45 2.25-5.988T11 3.05q.325-.05.575.088t.4.362q.15.225.163.525t-.188.575q-.425.65-.638 1.375T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q.775 0 1.538-.225t1.362-.625q.275-.175.563-.162t.512.137q.25.125.388.375t.087.6q-.35 3.45-2.937 5.725T12 21m0-2q2.2 0 3.95-1.213t2.55-3.162q-.5.125-1 .2t-1 .075q-3.075 0-5.238-2.163T9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.163 2.55T5 12q0 2.9 2.05 4.95T12 19m-.25-6.75" />
                                    </svg>
                                    <p>AI</p>
                                </span>
                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                        viewBox="0 0 48 48">
                                        <g fill="none" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 32h10v9H19z" />
                                            <rect width="38" height="24" x="5" y="8" rx="2" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M22 27h4M14 41h20" />
                                        </g>
                                    </svg>
                                    <p>App</p>
                                </span>
                            </div>
                        </button>
                        <a href="">
                            <div class="px-5">
                                <p class="font-semibold text-textbase">Toko</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="px-5">
                                <p class="font-semibold text-textbase">Partner</p>
                            </div>
                        </a>
                        <a href="">
                            <div class="px-5">
                                <p class="font-semibold text-textbase">Tentang</p>
                            </div>
                        </a>
                    </div>
                    <div class="w-full  h-full flex justify-end items-center">
                        <div class="flex">
                            <button
                                class="middle none center mr-4 rounded-lg bg-primarybase py-2 px-9 font-sans text-md font-bold text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                style="outline: none;" data-ripple-light="true">
                                Masuk
                            </button>
                            <button
                                class="middle none center mr-4 rounded-lg border hover:border-white border-primarybase py-2 px-9 text-primarybase font-sans text-md font-bold primarybase-white shadow-md shadow-blue-500/20 transition-all hover:bg-primarybase hover:text-white hover:shadow-lg focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                style="outline: none;" data-ripple-light="true">
                                Daftar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- hero --}}
        <div class="relative h-[40rem] isolate overflow-hidden bg-primarybase">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('{{ asset('heroimage.png') }}');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-25 bg-black"></span>
            </div>
            <div class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
                aria-hidden="true">
                <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
                    style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                </div>
            </div>
            <div class="relative px-14 max-w-7xl pb-24 pt-10 sm:pb-32 lg:flex lg:px-14 lg:py-24">
                <div class="absolute hidden lg:block right-0 top-0 max-w-2xl flex-none sm:max-w-5xl lg:max-w-none">
                    <img src="{{ asset('phone.png') }}" alt="efarm-app" class="w-[85rem] ml-96 -mr-64">
                </div>
                <div class="max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                    <div class="rounded-xl bg-white p-8 shadow-2xl ring-1 ring-white/10">
                        <h1 class="text-4xl font-bold tracking-tight text-textbase sm:text-6xl">Menyediakan Layanan
                            Sesuai Kebutuhan Anda</h1>
                        <p class="mt-3 text-xl leading-8 text-textbase">Kelola peternakan, jual hewan ternak, beli
                            hewan
                            ternak dengan berbagai layanan yang tersedia di eFarm</p>
                        <div class="mt-3 flex items-center gap-x-6">
                            <a href="#"
                                class="rounded-md bg-primarybase px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">Beli
                                hewan ternak <span aria-hidden="true">→</span></a>
                            <a href="#"
                                class="rounded-md bg-white ring-1 ring-primarybase px-5 py-2.5 text-sm font-semibold leading-6 text-primarybase">Jadi
                                Partner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card --}}
        <section class="pb-10 -mt-[4rem]">
            <div class="container px-9 mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <div class="max-w-[100px]">
                                        <img src="{{ asset('shield.svg') }}"
                                            class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded-lg">
                                <div>
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full" />
                                </div>
                                <div class="p-4 space-y-3">
                                    <p class="text-xl text-textbase leading-sm">
                                        Memberikan transaksi yang aman dan terpercaya terhadap pengguna! 🤝
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <div class="max-w-[100px]">
                                        <img src="{{ asset('shield.svg') }}"
                                            class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded-lg">
                                <div>
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full" />
                                </div>
                                <div class="p-4 space-y-3">
                                    <p class="text-xl text-textbase leading-sm">
                                        Memberikan transaksi yang aman dan terpercaya terhadap pengguna! 🤝
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <div class="max-w-[100px]">
                                        <img src="{{ asset('shield.svg') }}"
                                            class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded-lg">
                                <div>
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full" />
                                </div>
                                <div class="p-4 space-y-3">
                                    <p class="text-xl text-textbase leading-sm">
                                        Memberikan transaksi yang aman dan terpercaya terhadap pengguna! 🤝
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>



        <script data-name="BMC-Widget" data-cfasync="false" src="https://cdnjs.buymeacoffee.com/1.0.0/widget.prod.min.js"
            data-id="sahilnetic" data-description="Support me on Buy me a coffee!" data-message="" data-color="#FFDD00"
            data-position="Right" data-x_margin="18" data-y_margin="18"></script>
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>
    </div>

</body>

</html>
