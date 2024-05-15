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

<body class="relative antialiased bg-white">
    <div>
        @include('partner.layouts.navbar')
        <div class="flex min-h-screen flex-row bg-gray-100 text-gray-800">
            @include('partner.layouts.sidebar')
            <main class="main -ml-48 flex flex-grow flex-col p-4 transition-all duration-150 ease-in md:ml-0">
                @yield('content')
            </main>
        </div>
    </div>
    @stack('js')
</body>

</html>
