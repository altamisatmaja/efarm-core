<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    {{-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <title>@yield('title')</title>
    <style>
        .blurred-background {
            backdrop-filter: blur(10px);
        }

        .hover-trigger .hover-target {
            display: none;
        }

        .hover-trigger:hover .hover-target {
            display: block;
        }

        .hover-target:hover {
            display: block;
        }
    </style>
</head>

<body>
    <div>
        @include('customer.layouts.navbar')
        <div class="flex bg-white pt-24">
            @include('customer.layouts.sidebar')
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-white relative overflow-y-auto lg:ml-64">
                <main>
                    <div class="pt-16 px-4">
                        @yield('content')
                    </div>
                </main>

            </div>
        </div>
    </div>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
    {{-- <script src="{{ asset('js/sidebar.js') }}"></script> --}}
    <script>
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var navbar = document.querySelector('.sticky');
            var bgScrollNoAuth = document.querySelector('.sticky-nonauth');
            var layananNoAuth = document.querySelector('.layanan-nonauth');

            if (scrollPosition > 100) {
                var blurAmount = scrollPosition / 100;
                navbar.style.backdropFilter = "blur(" + blurAmount + "px)";
                bgScrollNoAuth.classList.remove('bg-white');
                layananNoAuth.classList.replace('text-textbase', 'text-white');
            } else {
                bgScrollNoAuth.classList.add('bg-white');
                navbar.style.backdropFilter = "none";
                layananNoAuth.classList.replace('text-white', 'text-textbase');
            }
        });

        const dropdownButton = document.getElementById('dropdown-button');
        const dropdownButtonAkun = document.getElementById('dropdown-button-akun');
        const dropdownMenu = document.getElementById('dropdown-menu');
        const dropdownMenuAkun = document.getElementById('dropdown-menu-akun');

        let isDropdownOpen = false;

        function toggleDropdown() {
            isDropdownOpen = !isDropdownOpen;
            if (isDropdownOpen) {
                dropdownMenu.classList.remove('hidden');
            } else {
                dropdownMenu.classList.add('hidden');
            }
        }

        function toggleDropdownAkun() {
            isDropdownOpen = !isDropdownOpen;
            if (isDropdownOpen) {
                dropdownMenuAkun.classList.remove('hidden');
            } else {
                dropdownMenuAkun.classList.add('hidden');
            }
        }

        toggleDropdown();
        toggleDropdownAkun();

        dropdownButton.addEventListener('click', toggleDropdown);
        dropdownButtonAkun.addEventListener('click', toggleDropdownAkun);
    </script>
    @stack('js')
</body>

</html>
