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
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body>
    <div>
        @include('includes.navbar')
        <div class="relative overflow-hidden">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
              <div class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900"></div>
              <div class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70"></div>
            </div>
            <!-- End Gradients -->
          
            <div class="relative z-10">
              <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                <div class="max-w-2xl text-center mx-auto">
                  <p class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent dark:from-blue-400 dark:to-violet-400">
                    Nano: A vision for 2024
                  </p>
          
                  <!-- Title -->
                  <div class="mt-5 max-w-2xl">
                    <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-gray-200">
                      The Intuitive Web Solutions
                    </h1>
                  </div>
                  <!-- End Title -->
          
                  <div class="mt-5 max-w-3xl">
                    <p class="text-lg text-gray-600 dark:text-gray-400">Preline UI is an open-source set of prebuilt UI components, ready-to-use examples and Figma design system based on the utility-first Tailwind CSS framework.</p>
                  </div>
          
                  <!-- Buttons -->
                  <div class="mt-8 gap-3 flex justify-center">
                    <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                      Get started
                      <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                    <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="#">
                      <svg class="flex-shrink-0 w-4 h-4" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.875 18C8.531 18 9.875 16.656 9.875 15V12H6.875C5.219 12 3.875 13.344 3.875 15C3.875 16.656 5.219 18 6.875 18Z" fill="#0ACF83"></path>
                        <path d="M3.875 9C3.875 7.344 5.219 6 6.875 6H9.875V12H6.875C5.219 12 3.875 10.656 3.875 9Z" fill="#A259FF"></path>
                        <path d="M3.875 3C3.875 1.344 5.219 0 6.875 0H9.875V6H6.875C5.219 6 3.875 4.656 3.875 3Z" fill="#F24E1E"></path>
                        <path d="M9.87501 0H12.875C14.531 0 15.875 1.344 15.875 3C15.875 4.656 14.531 6 12.875 6H9.87501V0Z" fill="#FF7262"></path>
                        <path d="M15.875 9C15.875 10.656 14.531 12 12.875 12C11.219 12 9.87501 10.656 9.87501 9C9.87501 7.344 11.219 6 12.875 6C14.531 6 15.875 7.344 15.875 9Z" fill="#1ABCFE"></path>
                      </svg>
                      Figma
                    </a>
                  </div>
                  <!-- End Buttons -->
                </div>
              </div>
            </div>
          </div>
          <!-- component -->
        <section>
            <div class="bg-black text-white py-8">
            <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
              <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
                <p class="ml-2 text-yellow-300 uppercase tracking-loose">Working Process</p>
                <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Working Process of Fest</p>
                <p class="text-sm md:text-base text-gray-50 mb-4">
                  Here’s your guide to the tech fest 2021 process. Go through all the steps to know the exact process of the
                  fest.
                </p>
                <a href="#"
                class="bg-transparent mr-auto hover:bg-yellow-300 text-yellow-300 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                Explore Now</a>
              </div>
              <div class="ml-0 md:ml-12 lg:w-2/3 sticky">
                <ol >
                    <li class="border-l-2 border-purple-600">
                      <div class="md:flex flex-start">
                        <div class="bg-purple-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                          </svg>
                        </div>
                        <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
                          <div class="flex justify-between mb-4">
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">New Web Design</a>
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">04 / 02 / 2022</a>
                          </div>
                          <p class="text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula.</p>
                          <button type="button" class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true">Preview</button>
                          <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">See demo</button>
                        </div>
                      </div>
                    </li>
                    <li class="border-l-2 border-green-600">
                      <div class="md:flex flex-start">
                        <div class="bg-green-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                          </svg>
                        </div>
                        <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
                          <div class="flex justify-between mb-4">
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">21 000 Job Seekers</a>
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">12 / 01 / 2022</a>
                          </div>
                          <p class="text-gray-700 mb-6">Libero expedita explicabo eius fugiat quia aspernatur autem laudantium error architecto recusandae natus sapiente sit nam eaque, consectetur porro molestiae ipsam an deleniti.</p>
                          <button type="button" class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true">Preview</button>
                          <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">See demo</button>
                        </div>
                      </div>
                    </li>
                    <li class="border-l-2 border-green-600">
                      <div class="md:flex flex-start">
                        <div class="bg-green-600 w-6 h-6 flex items-center justify-center rounded-full -ml-3.5">
                          <svg aria-hidden="true" focusable="false" data-prefix="fas" class="text-white w-3 h-3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm64-192c0-8.8 7.2-16 16-16h288c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16v-64zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path>
                          </svg>
                        </div>
                        <div class="block p-6 rounded-lg shadow-lg bg-gray-100 max-w-md ml-6 mb-10">
                          <div class="flex justify-between mb-4">
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">Awesome Employers</a>
                            <a href="#!" class="font-medium text-purple-600 hover:text-purple-700 focus:text-purple-800 duration-300 transition ease-in-out text-sm">21 / 12 / 2021</a>
                          </div>
                          <p class="text-gray-700 mb-6">Voluptatibus temporibus esse illum eum aspernatur, fugiat suscipit natus! Eum corporis illum nihil officiis tempore. Excepturi illo natus libero sit doloremque, laborum molestias rerum pariatur quam ipsam necessitatibus incidunt, explicabo.</p>
                          <button type="button" class="inline-block px-4 py-1.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true">Preview</button>
                          <button type="button" class="inline-block px-3.5 py-1 border-2 border-purple-600 text-purple-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true">See demo</button>
                        </div>
                      </div>
                    </li>
                  </ol>
              </div>
            </div>
          </div>
          </section>
          <!-- End Hero -->
            <div class="h-screen max-w-5xl px-2 py-3 mx-auto mt-32 tracking-wide md:px-4 md:mt-44">
                <!-- Title -->
                <div class="flex justify-center text-3xl">Frequently Asked Questions</div>
                <!-- End Title -->
        
                <!-- Accordion -->
                <div class="grid gap-3 py-8 text-lg leading-6 text-gray-800 md:gap-8 md:grid-cols-2">
                    <div class="space-y-3">
                        <!-- 1 -->
                        <div x-data="accordion(1)"
                            class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
                            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
                                <div class="flex items-center justify-between">
                                    <span class="tracking-wide">What is x-data ?</span>
                                    <span :class="handleRotate()"
                                        class="transition-transform duration-500 transform fill-current ">
                                        <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
        
                            <div x-ref="tab" :style="handleToggle()"
                                class="relative overflow-hidden transition-all duration-700 max-h-0">
                                <div class="px-6 pb-4 text-gray-600">
                                    Declare a new Alpine component and its data for a block of HTML </div>
                            </div>
                        </div>
                        <!-- End 1 -->
        
                        <!-- 2 -->
                        <div x-data="accordion(2)"
                            class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
                            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
                                <div class="flex items-center justify-between">
                                    <span class="tracking-wide">What is x-bind ?</span>
                                    <span :class="handleRotate()"
                                        class="transition-transform duration-500 transform fill-current ">
                                        <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
        
                            <div x-ref="tab" :style="handleToggle()"
                                class="relative overflow-hidden transition-all duration-700 max-h-0">
                                <div class="px-6 pb-4 text-gray-600">
                                    Dynamically set HTML attributes on an element.
                                </div>
                            </div>
                        </div>
                        <!-- End 2 -->
                    </div>
        
                    <div class="space-y-3">
                        <!-- 3 -->
                        <div x-data="accordion(3)"
                            class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
                            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
                                <div class="flex items-center justify-between">
                                    <span class="tracking-wide">What is $store ?</span>
                                    <span :class="handleRotate()"
                                        class="transition-transform duration-500 transform fill-current ">
                                        <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
        
                            <div x-ref="tab" :style="handleToggle()"
                                class="relative overflow-hidden transition-all duration-700 max-h-0">
                                <div class="px-6 pb-4 text-gray-600">
                                    Access a global store registered using Alpine.store(...)
                                </div>
                            </div>
                        </div>
                        <!-- End 3 -->
        
                        <!-- 4 -->
                        <div x-data="accordion(4)"
                            class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
                            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
                                <div class="flex items-center justify-between">
                                    <span class="tracking-wide">What is x-on ?</span>
                                    <span :class="handleRotate()"
                                        class="transition-transform duration-500 transform fill-current ">
                                        <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
        
                            <div x-ref="tab" :style="handleToggle()"
                                class="relative overflow-hidden transition-all duration-700 max-h-0">
                                <div class="px-6 pb-4 text-gray-600">
                                    Listen for browser events on an element
                                </div>
                            </div>
                        </div>
                        <!-- End 4 -->
                    </div>
                </div>
                <!-- End Accordion -->
            </div>
            <!-- End Layout -->
        
            <script>
                // Faq
                document.addEventListener("alpine:init", () => {
                    Alpine.store("accordion", {
                        tab: 0
                    });
        
                    Alpine.data("accordion", (idx) => ({
                        init() {
                            this.idx = idx;
                        },
                        idx: -1,
                        handleClick() {
                            this.$store.accordion.tab =
                                this.$store.accordion.tab === this.idx ? 0 : this.idx;
                        },
                        handleRotate() {
                            return this.$store.accordion.tab === this.idx ? "-rotate-180" : "";
                        },
                        handleToggle() {
                            return this.$store.accordion.tab === this.idx ?
                                `max-height: ${this.$refs.tab.scrollHeight}px` :
                                "";
                        }
                    }));
                });
                //  end faq
            </script>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
