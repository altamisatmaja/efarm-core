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
        <div class="w-full  h-full flex justify-end items-center">
            <div class="flex">
                <a href="{{ route('partner.login') }}" class="cursor-pointer">
                    <button
                        class="middle none center mr-4 rounded-lg bg-primarybase py-2 px-9 font-sans text-md font-bold text-white shadow-md shadow-blue-500/20 transition-all hover:shadow-lg focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:opacity-50 disabled:shadow-none"
                        style="outline: none;" data-ripple-light="true">
                        Masuk
                    </button>
                </a>
            </div>
        </div>
        <div class="container mx-auto p-4">
            <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Formulir akun partner</h1>
                <p class="text-gray-600 dark:text-gray-300 mb-6">Silahkan diisi sesuai akun yang anda inginkan</p>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="nama">Nama *</label>
                            <input name="nama" id="nama" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="username">Username *</label>
                            <input name="username" id="username" type="text" placeholder="Masukkan nama peternakan"
                                class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label for="email">Email *</label>
                            <input type="text" name="email" id="email" placeholder="Masukkan Tanggal lahir"
                                class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="password">Password *</label>
                            <input name="password" id="password" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="konfirmasi_password">Konfirmasi password *</label>
                            <input name="konfirmasi_password" id="konfirmasi_password" type="text"
                                placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('partner.submission') }}">
                            <button type="button"
                                class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                Ajukan
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
