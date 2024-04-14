<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>@yield('title')</title>
</head>

<body class="relative antialiased bg-gray-100">
    {{-- <div class="fixed bottom-4 right-4 xl:right-20">
        <a href="https://www.instagram.com/ternakexpress" target="_blank"
            class="transform duration-500 ease-in-out animate-bounce bg-yellow-400 px-4 py-3 font-mono font-semibold rounded-lg shadow hover:shadow-xl flex justify-between items-center gap-4">
            <img class="w-8 h-8 rounded"
                src="https://static.vecteezy.com/system/resources/thumbnails/018/930/748/small/whatsapp-logo-whatsapp-icon-whatsapp-transparent-free-png.png"
                alt="kontakadmin">
            Kontak Admin
        </a>
    </div> --}}
    <div>
        @include('partner.layouts.navbar')
        <main class="container mx-w-6xl mx-auto py-4">
            @yield('content')
        </main>
    </div>
    @stack('js')
</body>

</html>
