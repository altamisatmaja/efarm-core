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
        <div class="container mx-auto p-4">
            <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Personal Information</h1>
                <p class="text-gray-600 dark:text-gray-300 mb-6">Use a permanent address where you can receive mail.</p>
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <input type="text" placeholder="First name" class="border p-2 rounded w-full">
                        <input type="text" placeholder="Last name" class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-4">
                        <input type="email" placeholder="Email address" class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-4">
                        <select class="border p-2 rounded w-full">
                            <option>United States</option>
                            <!-- Add more countries as needed -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <input type="text" placeholder="Street address" class="border p-2 rounded w-full">
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <input type="text" placeholder="City" class="border p-2 rounded w-full">
                        <input type="text" placeholder="State / Province" class="border p-2 rounded w-full">
                        <input type="text" placeholder="ZIP / Postal code" class="border p-2 rounded w-full">
                    </div>
                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Upload File
                        </label>

                        <div class="mb-8">
                            <input type="file" name="file" id="file" class="sr-only" />
                            <label for="file"
                                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                        Drop files here
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        Or
                                    </span>
                                    <span
                                        class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                        Browse
                                    </span>
                                </div>
                            </label>
                        </div>

                        <div class="mb-5 rounded-md bg-[#F5F7FB] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                    banner-design.png
                                </span>
                                <button class="text-[#07074D]">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="rounded-md bg-[#F5F7FB] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-[#07074D]">
                                    banner-design.png
                                </span>
                                <button class="text-[#07074D]">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.279337 0.279338C0.651787 -0.0931121 1.25565 -0.0931121 1.6281 0.279338L9.72066 8.3719C10.0931 8.74435 10.0931 9.34821 9.72066 9.72066C9.34821 10.0931 8.74435 10.0931 8.3719 9.72066L0.279337 1.6281C-0.0931125 1.25565 -0.0931125 0.651788 0.279337 0.279338Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.279337 9.72066C-0.0931125 9.34821 -0.0931125 8.74435 0.279337 8.3719L8.3719 0.279338C8.74435 -0.0931127 9.34821 -0.0931123 9.72066 0.279338C10.0931 0.651787 10.0931 1.25565 9.72066 1.6281L1.6281 9.72066C1.25565 10.0931 0.651787 10.0931 0.279337 9.72066Z"
                                            fill="currentColor" />
                                    </svg>
                                </button>
                            </div>
                            <div class="relative mt-5 h-[6px] w-full rounded-lg bg-[#E2E5EF]">
                                <div class="absolute left-0 right-0 h-full w-[75%] rounded-lg bg-[#6A64F1]"></div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Send File
                        </button>
                    </div>
                    <button type="button" id="theme-toggle"
                        class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                        Toggle Theme
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
