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
        <div class="text-white mt-24 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">

            <div class="grid gap-8 md:grid-cols-2 ">
                <div class="flex flex-col  justify-center">
                    <p class="self-start inline text-xl font-semibold text-textbase">
                        Tentang eFarm
                    </p>
                    <h2 class="text-4xl font-bold text-textbase">eFarm, Teman peternakanmu</h2>
                    <div class="h-6"></div>
                    <p class="font-serif text-xl text-textbase md:pr-10">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam
                        autem, a recusandae vero praesentium qui impedit doloremque
                        molestias necessitatibus.
                    </p>
                    <div class="h-8"></div>
                    <div class="grid grid-cols-2 gap-4 pt-8 ">
                        <div>
                            <p class="font-semibold text-textbase">Partner</p>
                            <div class="h-4"></div>
                            <p class="font-serif text-textbase">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Delectus labor.
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold text-textbase">Market</p>
                            <div class="h-4"></div>
                            <p class="font-serif text-textbase">
                                Ipsum dolor sit, amet consectetur adipisicing elit. Delectus
                                amet consectetur.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="-mr-24 rounded-lg md:rounded-l-full bg-gradient-to-br from-gray-900 to-black h-96">
                    </div>
                </div>
            </div>

            <div class="h-32 md:h-40"></div>

            <p class="text-4xl">
                <span class="text-textbase font-semibold text-6xl">Dibangun oleh kelompok PPL E08 dengan Mitranya adalah
                    Ternak Express</span>
            </p>

            <main class="flex flex-col items-center justify-center mt-32">
                <header class="container">
                    <!-- Navbar -->
                    <nav
                        class="flex justify-between md:justify-around py-4 bg-white/80 backdrop-blur-md shadow-md w-full px-10 fixed top-0 left-0 right-0 z-10 px-8 md:px-3">
                        <!-- Logo Container -->
                        <div class="flex items-center">
                            <!-- Logo -->
                            <a class="cursor-pointer">
                                <h3 class="text-2xl font-medium text-blue-500">
                                    <img class="h-10"
                                        src="https://stackoverflow.design/assets/img/logos/so/logo-stackoverflow.svg"
                                        alt="Store Logo" />
                                </h3>
                            </a>
                        </div>

                        <!-- Links Section -->
                        <div
                            class="items-center md:space-x-8 justify-center justify-items-start md:justify-items-center md:flex md:pt-2 w-full left-0 top-16 px-5 md:px-10 py-3 md:py-0 border-t md:border-t-0">
                            <a
                                class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300">
                                Home
                            </a>

                            <a
                                class="flex text-gray-600 cursor-pointer transition-colors duration-300 font-semibold text-blue-600">
                                Themes
                            </a>

                            <a
                                class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300">
                                Developers
                            </a>

                            <a
                                class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300">
                                Pricing
                            </a>

                            <a
                                class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300">
                                Blog
                            </a>

                            <a
                                class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300">
                                About Us
                            </a>
                        </div>

                        <!-- Auth Links -->
                        <div class="flex items-center space-x-5 hidden md:flex">
                            <!-- Register -->
                            <a
                                class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300">
                                <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                                </svg>

                                Register
                            </a>

                            <!-- Login -->
                            <a
                                class="flex text-gray-600 cursor-pointer transition-colors duration-300 font-semibold text-blue-600">
                                <svg class="fill-current h-5 w-5 mr-2 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24"
                                    height="24" viewBox="0 0 24 24">
                                    <path
                                        d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                                </svg>

                                Login
                            </a>
                        </div>

                        <!-- Hamberger Menu -->
                        <button class="w-10 h-10 md:hidden justify-self-end rounded-full hover:bg-gray-100">
                            <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
                            </svg>
                        </button>
                    </nav>
                </header>

                <!-- Parallax Background -->
                <section
                    class="flex flex-col w-full h-[500px] bg-blur bg-cover bg-fixed bg-center flex justify-center items-center rounded-3xl"
                    style="
                        background-image: url({{ asset('images/herofixed.png') }});
                    ">
                    <h1 class="text-primarybase text-7xl font-bold mt-20 mb-10">
                        eFarm
                    </h1>

                    <span class="text-center font-bold my-20 text-white/90">
                        <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
                            class="text-primarybase hover:text-white">
                            Jadi Partner
                        </a>

                        <a href="https://unsplash.com/photos/8Pm_A-OHJGg" target="_blank"
                            class="text-primarybase hover:text-white">
                            Jual Beli Hewan Ruminansia
                        </a>

                    </span>
                </section>


            </main>

        </div>


        <div class="text-white mt-24 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
            <div class="mx-auto px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12 flex-col">
                    <div class="flex items-center flex-col">
                        <h2 class="text-6xl font-bold text-gray-800 lg:text-6xl ">Dokumentasi eFarm</h2>
                        <p class="max-w-screen text-xl mt-3 text-gray-500 ">
                            Ini adalah aktivitas, kemitraan, produk, penjalanan, dan sejarah dari eFarm
                        </p>
                    </div>

                </div>

                <div class="grid grid-cols-3 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/03/16/Screenshot-138-2778996270.png"
                            loading="lazy" alt="Photo by Minh Pham"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Kambing</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2023/08/23/kandang-kambing-mewah-di-tuban-2_169.jpeg?w=650"
                            loading="lazy" alt="Photo by Magicle"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Kandang</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://kominfo.jatimprov.go.id/uploads/images/IMG-20240311-WA0050.jpg"
                            loading="lazy" alt="Photo by Martin Sanchez"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Mitra</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://cdn.rri.co.id/berita/48/images/1677338816561-Bupati_Banyuwangi_Ipuk_Fiestiandani_(Kanan)_Saat_Meninjau_Peternakan_Kambing/1677338816561-Bupati_Banyuwangi_Ipuk_Fiestiandani_(Kanan)_Saat_Meninjau_Peternakan_Kambing.jpg"
                            loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span
                            class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Aktivitas</span>
                    </a>
                    <!-- image - end -->
                </div>
            </div>
        </div>

        @include('includes.footer')
    </div>
</body>

</html>
