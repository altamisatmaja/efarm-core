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
    <title>eFarm | Market</title>
    <style>
        * {
            font-family: Montserrat;
        }

        .text-primary {
            color: #f9b529;
        }

        .text-primary-lite {
            color: #fac251;
        }

        .text-secondary {
            color: #294356;
        }

        .text-secondary-lite {
            color: #d5dee5;
        }

        .bg-primary {
            background-color: #f9b529;
        }

        .bg-primary-lite {
            background-color: #fac251;
        }

        .bg-secondary {
            background-color: #294356;
        }

        .bg-secondary-lite {
            background-color: #d5dee5;
        }

    </style>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</head>

<body>
    <div>
        @include('includes.navbar')
        <!-- component -->
        <div class="py-14 px-4 md:px-6 2xl:px-20 2xl:container 2xl:mx-auto">
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->

            <div class="flex justify-start item-start space-y-2 flex-col">
                <h1 class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-gray-800">
                    Order #{{ $detail->reference }}</h1>
                <p class="text-base font-medium leading-6 text-gray-600">21st Mart 2021 at 10:34 PM
                </p>
            </div>
            <div
                class="mt-10 flex flex-col md:flex-row jusitfy-center items-stretch w-full xl:space-x-3 space-y-4 md:space-y-3 xl:space-y-0">
                <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                    <div
                        class="flex flex-col justify-start items-start bg-gray-50 px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                        <p
                            class="text-lg md:text-xl font-semibold leading-6 xl:leading-5 text-gray-800">
                            Customers Cart</p>
                        <div
                            class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                            <div class="pb-4 md:pb-8 w-full md:w-40">
                                <img class="w-full hidden md:block" src="https://i.ibb.co/84qQR4p/Rectangle-10.png"
                                    alt="dress" />
                                <img class="w-full md:hidden" src="https://i.ibb.co/L039qbN/Rectangle-10.png"
                                    alt="dress" />
                            </div>
                            <div
                                class="border-b border-gray-200 md:flex-row flex-col flex justify-between items-start w-full pb-8 space-y-4 md:space-y-0">
                                <div class="w-full flex flex-col justify-start items-start space-y-8">
                                    <h3
                                        class="text-xl xl:text-2xl font-semibold leading-6 text-gray-800">
                                        Premium Quaility Dress</h3>
                                    <div class="flex justify-start items-start flex-col space-y-2">
                                        <p class="text-sm leading-none text-gray-800"><span
                                                class=" text-gray-300">Style: </span> Italic Minimal
                                            Design</p>
                                        <p class="text-sm leading-none text-gray-800"><span
                                                class=" text-gray-300">Size: </span> Small</p>
                                        <p class="text-sm leading-none text-gray-800"><span
                                                class=" text-gray-300">Color: </span> Light Blue</p>
                                    </div>
                                </div>
                                <div class="flex justify-between space-x-8 items-start w-full">
                                    <p class="text-base xl:text-lg leading-6">$36.00 <span
                                            class="text-red-300 line-through"> $45.00</span></p>
                                    <p class="text-base xl:text-lg leading-6 text-gray-800">01</p>
                                    <p
                                        class="text-base xl:text-lg font-semibold leading-6 text-gray-800">
                                        $36.00</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div
                        class="flex justify-center md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                        <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 space-y-6">
                            <h3 class="text-xl font-semibold leading-5 text-gray-800">Summary</h3>
                            <div
                                class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                                <div class="flex justify-between w-full">
                                    <p class="text-base leading-4 text-gray-800">Subtotal</p>
                                    <p class="text-base leading-4 text-gray-600">$56.00</p>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-base leading-4 text-gray-800">Discount <span
                                            class="bg-gray-200 p-1 text-xs font-medium  leading-3 text-gray-800">STUDENT</span>
                                    </p>
                                    <p class="text-base leading-4 text-gray-600">-$28.00 (50%)</p>
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-base leading-4 text-gray-800">Shipping</p>
                                    <p class="text-base leading-4 text-gray-600">$8.00</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-center w-full">
                                <p class="text-base font-semibold leading-4 text-gray-800">Total</p>
                                <p class="text-base font-semibold leading-4 text-gray-600">@currency($detail->amount)</p>
                            </div>
                        </div>
                        <div
                            class="flex flex-col justify-center px-4 py-6 md:p-6 xl:p-8 w-full bg-gray-50 space-y-6">
                            <h3 class="text-xl font-semibold leading-5 text-gray-800">Shipping</h3>
                            <div class="flex justify-between items-start w-full">
                                <div class="flex justify-center items-center space-x-4">
                                    <div class="w-8 h-8">
                                        <img class="w-full h-full" alt="logo"
                                            src="https://i.ibb.co/L8KSdNQ/image-3.png" />
                                    </div>
                                    <div class="flex flex-col justify-start items-center">
                                        <p class="text-lg leading-6 font-semibold text-gray-800">DPD
                                            Delivery<br /><span class="font-normal">Delivery with 24 Hours</span></p>
                                    </div>
                                </div>
                                <p class="text-lg font-semibold leading-6 text-gray-800">$8.00</p>
                            </div>
                            <div class="w-full flex justify-center items-center">
                                <button
                                    class="hover:bg-black  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-5 w-96 md:w-full bg-gray-800 text-base font-medium leading-4 text-white">View
                                    Carrier Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-gray-50 w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
                    <h3 class="text-xl font-semibold leading-5 text-gray-800">Metode pembayaran</h3>
                    <div
                        class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">
                        <div class="flex flex-col justify-start items-start flex-shrink-0">
                            <div
                                class="flex justify-center w-full md:justify-start items-center space-x-4 py-8 border-b border-gray-200">
                                <img src="https://i.ibb.co/5TSg7f6/Rectangle-18.png" alt="avatar" />
                                <div class="flex justify-start items-start flex-col space-y-2">
                                    <p
                                        class="text-base font-semibold leading-4 text-left text-gray-800">
                                        David Kent</p>
                                    <p class="text-sm leading-5 text-gray-600">10 Previous Orders
                                    </p>
                                </div>
                            </div>

                            <div
                                class="flex justify-center text-gray-800 md:justify-start items-center space-x-4 py-4 border-b border-gray-200 w-full">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3 7L12 13L21 7" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="cursor-pointer text-sm leading-5 ">david89@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex justify-between xl:h-full items-stretch w-full flex-col mt-6 md:mt-0">
                            <div
                                class="flex justify-center md:justify-start xl:flex-col flex-col md:space-x-6 lg:space-x-8 xl:space-x-0 space-y-4 xl:space-y-12 md:space-y-0 md:flex-row items-center md:items-start">
                                <div
                                    class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4 xl:mt-8">
                                    <p
                                        class="text-base font-semibold leading-4 text-center md:text-left text-gray-800">
                                        Shipping Address</p>
                                    <p
                                        class="w-48 lg:w-full xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">
                                        180 North King Street, Northhampton MA 1060</p>
                                </div>
                                <div
                                    class="flex justify-center md:justify-start items-center md:items-start flex-col space-y-4">
                                    <p
                                        class="text-base font-semibold leading-4 text-center md:text-left text-gray-800">
                                        Billing Address</p>
                                    <p
                                        class="w-48 lg:w-full xl:w-48 text-center md:text-left text-sm leading-5 text-gray-600">
                                        180 North King Street, Northhampton MA 1060</p>
                                </div>
                            </div>
                            <div class="flex w-full justify-center items-center md:justify-start md:items-start">
                                <button
                                    class="mt-6 md:mt-0  py-5 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 border border-gray-800 font-medium w-96 2xl:w-full text-base font-medium leading-4 text-gray-800">Edit
                                    Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
</body>

</html>