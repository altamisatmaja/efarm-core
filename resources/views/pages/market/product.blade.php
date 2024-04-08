<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>eFarm | Market</title>
</head>

<body class="antialiased">
    <div>
        @include('includes.navbar')
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-2">
            <div class="flex flex-col md:flex-row -mx-4">
                <!-- Menu -->
                <div class="w-5/12 border-r md:flex-col bg-white md:block">
                    <div class="py-2 pl-10 space-y-3 sticky top-0">
                        <div class="md:flex-1 px-4">
                            <div x-data="{ image: 1 }" x-cloak>
                                <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                                    <div x-show="image === 1"
                                        class="h-64 md:h-80 rounded-lg bg-gray-400 mb-4 flex items-center justify-center">
                                        <span class="text-5xl">1</span>
                                    </div>

                                    <div x-show="image === 2"
                                        class="h-64 md:h-80 rounded-lg bg-gray-600 mb-4 flex items-center justify-center">
                                        <span class="text-5xl">2</span>
                                    </div>

                                    <div x-show="image === 3"
                                        class="h-64 md:h-80 rounded-lg bg-gray-600 mb-4 flex items-center justify-center">
                                        <span class="text-5xl">3</span>
                                    </div>

                                    <div x-show="image === 4"
                                        class="h-64 md:h-80 rounded-lg bg-gray-600 mb-4 flex items-center justify-center">
                                        <span class="text-5xl">4</span>
                                    </div>
                                </div>

                                <div class="flex -mx-2 mb-4">
                                    <template x-for="i in 4">
                                        <div class="flex-1 px-2">
                                            <button x-on:click="image = i"
                                                :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                                class="focus:outline-none w-full rounded-lg h-20 md:h-20 bg-gray-100 flex items-center justify-center">
                                                <span x-text="i" class="text-2xl"></span>
                                            </button>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- News Content -->
                <div class="md:w-4/6 border-r bg-gray-50">
                    {{-- <nav class="flex py-4 px-4 sticky top-0 border-b bg-white items-center justify-between">
                    <h1 class="font-extrabold tracking-wide text-lg ">Home</h1>
                    <div class="text-blue-400">
                        <i class="fa fa-dot-circle-o"></i>
                    </div>
                </nav> --}}
                    <div class=" overflow-hidden">
                        <div class="md:flex-1 px-4">
                            <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                                Lorem
                                ipsum dolor, sit amet consectetur, adipisicing elit.</h2>
                            <p class="text-gray-500 text-sm">By <a href="#"
                                    class="text-indigo-600 hover:underline">ABC Company</a></p>

                            <div class="flex items-center space-x-4 my-4">
                                <div>
                                    <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                                        <span class="text-indigo-400 mr-1 mt-1">$</span>
                                        <span class="font-bold text-indigo-600 text-3xl">25</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <p class="text-green-500 text-xl font-semibold">Save 12%</p>
                                    <p class="text-gray-400 text-sm">Inclusive of all Taxes.</p>
                                </div>
                            </div>

                            <p class="text-gray-500">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Vitae
                                exercitationem porro saepe ea harum corrupti vero id laudantium enim, libero blanditiis
                                expedita cupiditate a est.</p>

                            <div class="flex py-4 space-x-4">
                                <div class="relative">
                                    <div
                                        class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">
                                        Qty</div>
                                    <select
                                        class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <button type="button"
                                    class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-5/12 bg-white hidden md:block">
                    <div class="py-2 pl-8 pr-10 space-y-3 sticky top-0">
                        <div class="h-full rounded-lg border bg-white p-6 shadow-md md:mt-0">
                            <div class="mb-2 flex justify-between">
                                <p class="text-gray-700">Subtotal</p>
                                <p class="text-gray-700">$129.99</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-gray-700">Shipping</p>
                                <p class="text-gray-700">$4.99</p>
                            </div>
                            <hr class="my-4" />
                            <div class="flex justify-between">
                                <p class="text-lg font-bold">Total</p>
                                <div class="">
                                    <p class="mb-1 text-lg font-bold">$134.98 USD</p>
                                    <p class="text-sm text-gray-700">including VAT</p>
                                </div>
                            </div>
                            <button
                                class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check
                                out</button>
                        </div>
                    </div>
                </div>
                <!-- Follow and trends -->
                {{-- <div class="flex-1 py-4 w-6/12 pl-10 pr-16 space-y-4 bg-white hidden md:block">
                <div class="h-full  rounded-lg border bg-white p-6 shadow-md md:mt-0">
                    <div class="mb-2 flex justify-between">
                      <p class="text-gray-700">Subtotal</p>
                      <p class="text-gray-700">$129.99</p>
                    </div>
                    <div class="flex justify-between">
                      <p class="text-gray-700">Shipping</p>
                      <p class="text-gray-700">$4.99</p>
                    </div>
                    <hr class="my-4" />
                    <div class="flex justify-between">
                      <p class="text-lg font-bold">Total</p>
                      <div class="">
                        <p class="mb-1 text-lg font-bold">$134.98 USD</p>
                        <p class="text-sm text-gray-700">including VAT</p>
                      </div>
                    </div>
                    <button class="mt-6 w-full rounded-md bg-blue-500 py-1.5 font-medium text-blue-50 hover:bg-blue-600">Check out</button>
                  </div>
            </div> --}}
            </div>
        </div>
    </div>
</body>

</html>


<div class="py-6">
    <!-- Breadcrumbs -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 text-gray-400 text-sm">
            <a href="#" class="hover:underline hover:text-gray-600">Home</a>
            <span>
                <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
            <a href="#" class="hover:underline hover:text-gray-600">Electronics</a>
            <span>
                <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
            <span>Headphones</span>
        </div>
    </div>
    <!-- ./ Breadcrumbs -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div x-data="{ image: 1 }" x-cloak>
                    <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                        <div x-show="image === 1"
                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">1</span>
                        </div>

                        <div x-show="image === 2"
                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">2</span>
                        </div>

                        <div x-show="image === 3"
                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">3</span>
                        </div>

                        <div x-show="image === 4"
                            class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">4</span>
                        </div>
                    </div>

                    <div class="flex -mx-2 mb-4">
                        <template x-for="i in 4">
                            <div class="flex-1 px-2">
                                <button x-on:click="image = i"
                                    :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
                                    class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                    <span x-text="i" class="text-2xl"></span>
                                </button>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                    Lorem
                    ipsum dolor, sit amet consectetur, adipisicing elit.</h2>
                <p class="text-gray-500 text-sm">By <a href="#" class="text-indigo-600 hover:underline">ABC
                        Company</a></p>

                <div class="flex items-center space-x-4 my-4">
                    <div>
                        <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                            <span class="text-indigo-400 mr-1 mt-1">$</span>
                            <span class="font-bold text-indigo-600 text-3xl">25</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="text-green-500 text-xl font-semibold">Save 12%</p>
                        <p class="text-gray-400 text-sm">Inclusive of all Taxes.</p>
                    </div>
                </div>

                <p class="text-gray-500">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Vitae
                    exercitationem porro saepe ea harum corrupti vero id laudantium enim, libero blanditiis
                    expedita cupiditate a est.</p>

                <div class="flex py-4 space-x-4">
                    <div class="relative">
                        <div
                            class="text-center left-0 pt-2 right-0 absolute block text-xs uppercase text-gray-400 tracking-wide font-semibold">
                            Qty</div>
                        <select
                            class="cursor-pointer appearance-none rounded-xl border border-gray-200 pl-4 pr-8 h-14 flex items-end pb-1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <button type="button"
                        class="h-14 px-6 py-2 font-semibold rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
