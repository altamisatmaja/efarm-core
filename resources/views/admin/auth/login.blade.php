<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>Admin | Masuk</title>
</head>

<body>
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                <img class="w-56 mr-2" src="{{ asset('logo.svg') }}"
                    alt="logo">
            </a>
            @if (Session::has('error'))
                <div
                    class='flex items-center text-white max-w-sm w-full bg-red-400 shadow-md rounded-lg overflow-hidden mx-auto'>
                    <div class='w-10 border-r px-2'>
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                            </path>
                        </svg>
                    </div>

                    <div class='flex items-center px-2 py-3'>


                        <div class='mx-3'>
                            <p>{{ 'error' }}}</p>
                        </div>
                    </div>
                </div>
            @endif
            <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-textbase md:text-2xl">
                        Selamat datang admin 👋
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/admin/login" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-textbase">Email
                                anda</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-400 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 -gray-600"
                                placeholder="name@company.com" required="">
                        </div>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-textbase">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" required=""
                                class="bg-gray-50 border border-gray-300 text-gray-400 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 -gray-600">
                        </div>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 -gray-600"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-textbase">Ingat saya</label>
                                </div>
                            </div>
                            {{-- <a href="#" class="text-sm font-medium text-primarybase hover:underline">Forgot
                                password?</a> --}}
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-primarybase hover:bg-primarybase focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>
                        {{-- <p class="text-sm font-light text-gray-500">
                            Don't have an account yet? <a href="#"
                                class="font-medium text-primarybase hover:underline">Sign up</a>
                        </p> --}}
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
