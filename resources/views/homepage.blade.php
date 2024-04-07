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
    <title>eFarm | Jual beli hewan ternak</title>
    <style>
        * {
            font-family: Montserrat;
        }

        .blurred-background {
            backdrop-filter: blur(8px);
        }
    </style>
</head>

<body>
    <div>
        @include('includes.navbar')

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
                    <img src="{{ asset('phone.png') }}" alt="efarm-app" class="w-[85rem] ml-96 -mr-64 z-0">
                </div>
                <div class="max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8 z-50">
                    <div class="rounded-xl bg-white p-8 shadow-2xl ring-1 ring-white/10">
                        <h1 class="text-4xl font-bold tracking-tight text-textbase sm:text-6xl">Menyediakan Layanan
                            Sesuai Kebutuhan Anda</h1>
                        <p class="mt-3 text-xl leading-8 text-textbase">Kelola peternakan, jual hewan ternak, beli
                            hewan
                            ternak dengan berbagai layanan yang tersedia di eFarm</p>
                        <div class="mt-3 flex items-center gap-x-6">
                            <a href="{{ route('homepage.market') }}"
                                class="rounded-md cursor-pointer bg-primarybase px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">
                                Beli hewan ternak <span aria-hidden="true">→</span>
                            </a>
                            <a href="{{ route('homepage.partner') }}"
                                class="rounded-md bg-white cursor-pointer ring-1 ring-primarybase px-5 py-2.5 text-sm font-semibold leading-6 text-primarybase">Jadi
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
    </div>
    @include('includes.footer')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                var scrollPosition = $(window).scrollTop();
                var blurTriggerPosition = 200;

                // Menambahkan atau menghapus kelas blur sesuai dengan posisi scroll
                if (scrollPosition > blurTriggerPosition) {
                    $('.sticky').addClass('blurred-background');
                } else {
                    $('.sticky').removeClass('blurred-background');
                }
            });
        });
    </script>


</body>

</html>
