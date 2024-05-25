<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-white">
    <div class="min-h-screen flex flex-col">

        <!-- Navbar -->
        <div
            class="bg-red-100 text-white shadow py-2 flex flex-wrap items-center px-4 md:px-10 md:flex md:items-center md:justify-between justify-start">
            <!-- Logo -->
            <div>
                <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="Logo"
                    class="w-28 h-18 mr-2">
            </div>
            <!-- Navbar links -->
            <div class="flex justify-center md:justify-start md:w-auto">
                <div class="md:visible">
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Home</a>
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Market</a>
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Partner</a>
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Tentang</a>
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Terdekat</a>
                </div>
            </div>
            <!-- Logout button -->
            <a href="{{ route('customer.logout') }}"
                class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-3 ml-4 hover:bg-gray-100">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                        <path
                            d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                    </svg>
                </div>
            </a>
            <!-- Mobile menu button -->
            <button id="menuBtn" class="md:hidden">
                <i class="fas fa-bars text-gray-500 text-lg"></i>
            </button>
        </div>

        <!-- Navbar kedua -->
        <div
            class="bg-red-100 text-white shadow py-2 flex flex-wrap items-center justify-center md:flex md:items-center md:justify-center">
            <div class="flex justify-center md:w-auto">
                <div class="md:visible">
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Hewan Ternak</a>
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Hewan Kurban</a>
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Hewan Aqiqah</a>
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Sapi</a>
                    <a href="#" class="text-textbase text-lg font-semibold md:ml-6">Kambing</a>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="p-4 md:p-2 bg-blue-300 md:w-60 flex flex-col justify-between md:static hidden md:block md:h-screen h-auto"
            id="sideNav">
            <nav class="md:flex-col md:flex px-3">
                <a href="#" class="nav-link"><i class="mr-2"></i>Dashboard</a>
                <a href="#" class="nav-link"><i class="mr-2"></i>Pesanan</a>
                <a href="#" class="nav-link"><i class="mr-2"></i>Wishlist</a>
                <a href="#" class="nav-link"><i class="mr-2"></i>Lacak</a>
                <a href="#" class="nav-link"><i class="mr-2"></i>Akun</a>
            </nav>
            <div class="bg-gradient-to-r from-cyan-300 to-cyan-500 h-px mt-2"></div>
            <p class="mb-1 px-5 py-3 text-xs text-cyan-500">Copyright WCSLAT@2023</p>
        </div>
        <!-- Main content -->
        <div class="flex-1 p-4">
            <main class="h-full bg-yellow-200"></main>
        </div>
    </div>
    <script>
        const sideNav = document.getElementById('sideNav');
        const navBar = document.getElementById('navBar');
        const menuBtn = document.getElementById('menuBtn');
        // If sidebar exists, enable menu button
        if (sideNav) {
            menuBtn.addEventListener('click', () => {
                sideNav.classList.toggle('hidden');
                navBar.classList.toggle('hidden');
            });
        } else {
            menuBtn.addEventListener('click', () => {
                navBar.classList.toggle('hidden');
            });
        }
    </script>
</body>

</html>
