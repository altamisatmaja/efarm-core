@extends('partner.layouts.app')

@section('title', 'Dashboard | Account')

@section('content')
    <div class="">
        @if (session('success'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                    data-dismissible="alert">
                    <div class="absolute top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="mt-px h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-8 mr-12">
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Berhasil
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('success') }}
                        </p>
                    </div>
                    <div data-dismissible-target="alert" data-ripple-dark="true"
                        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                        <div role="button" class="w-max rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
                    data-dismissible="alert">
                    <div class="absolute top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="mt-px h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-8 mr-12">
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Gagal
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('error') }}
                        </p>
                    </div>
                    <div data-dismissible-target="alert" data-ripple-dark="true"
                        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                        <div role="button" class="w-max rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="w-full">
            <div class="container mx-auto">
                <div class="md:flex no-wrap md:-mx-2 ">
                    <div class="w-full h-64">
                        <div class="bg-white p-3 shadow-sm rounded-lg">
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">About</span>
                            </div>
                            <div class="text-gray-700">
                                <div class="grid md:grid-cols-2 text-sm">
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">First Name</div>
                                        <div class="px-4 py-2">Jane</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Last Name</div>
                                        <div class="px-4 py-2">Doe</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Gender</div>
                                        <div class="px-4 py-2">Female</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Contact No.</div>
                                        <div class="px-4 py-2">+11 998001001</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Current Address</div>
                                        <div class="px-4 py-2">Beech Creek, PA, Pennsylvania</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Permanant Address</div>
                                        <div class="px-4 py-2">Arlington Heights, IL, Illinois</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Email.</div>
                                        <div class="px-4 py-2">
                                            <a class="text-blue-800" href="mailto:jane@example.com">jane@example.com</a>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="px-4 py-2 font-semibold">Birthday</div>
                                        <div class="px-4 py-2">Feb 06, 1998</div>
                                    </div>
                                </div>
                            </div>
                            <button
                                class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Show
                                Full Information</button>
                        </div>
                        <!-- End of about section -->

                        <div class="my-4"></div>

                        <!-- Experience and education -->
                        <div class="p-3 shadow-sm rounded-sm">

                            <div class="grid grid-cols-2 gap-x-5">
                                <div class="bg-white">
                                    <div class="flex  items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                        <span clas="text-green-500">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide">Experience</span>
                                    </div>
                                    <ul class="list-inside space-y-2">
                                        <li>
                                            <div class="text-teal-600">Owner at Her Company Inc.</div>
                                            <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">Owner at Her Company Inc.</div>
                                            <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">Owner at Her Company Inc.</div>
                                            <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">Owner at Her Company Inc.</div>
                                            <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="bg-white">
                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                        <span clas="text-green-500">
                                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                                <path fill="#fff"
                                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide">Education</span>
                                    </div>
                                    <ul class="list-inside space-y-2">
                                        <li>
                                            <div class="text-teal-600">Masters Degree in Oxford</div>
                                            <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                        </li>
                                        <li>
                                            <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                            <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End of Experience and education grid -->
                        </div>
                        <!-- End of profile tab -->
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var successMessage = document.getElementById('successMessage');

                // Sembunyikan pesan sukses saat diklik
                successMessage.addEventListener('click', function() {
                    successMessage.style.display = 'none';
                });
            });
        </script>
        @endpush
    @endsection
