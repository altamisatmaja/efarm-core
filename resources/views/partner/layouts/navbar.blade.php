<style>
    [x-cloak] {
        display: none !important;
    }

    * {
        font-family: 'Montserrat';
    }
</style>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    const setup = () => {
        return {
            loading: true,
            isSidebarOpen: false,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            isSearchBoxOpen: false,
        }
    }
</script>

@auth
    <nav class="p-4 md:py-8 xl:px-0 md:container md:mx-w-6xl md:mx-auto">
        <div class="hidden lg:flex lg:justify-between lg:items-center">
            <a href="#" class="flex items-start gap-2 group">
                <div class="bg-primarybase text-white p-2 rounded-md group-hover:bg-blue-800">
                    <svg class="text-white" width="30" height="30" viewBox="0 0 96 100" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M45.2594 0.226259C38.3872 1.16545 32.8117 2.88348 26.9985 5.8614C24.146 7.32746 21.0557 9.20584 21.0557 9.48072C21.0557 9.57235 21.9633 10.2596 23.0438 11.0155C25.5074 12.7106 28.9651 16.1925 30.6507 18.6894C31.9906 20.6365 34.4541 25.6073 34.4541 26.2945C34.4541 26.5236 34.5622 26.7068 34.6702 26.7068C34.7999 26.7068 34.8864 26.5694 34.8864 26.4091C34.8864 25.928 36.6584 22.3545 37.6957 20.7281C38.9491 18.781 41.7801 15.8031 43.5305 14.589C47.8742 11.6111 52.6934 10.3283 57.5125 10.901C60.2138 11.2217 61.6617 11.6111 64.7088 12.8939C66.5889 13.6956 67.4749 13.9476 68.3826 13.9476C73.5691 13.9476 75.1898 7.51071 70.7813 4.50988C68.7715 3.13546 62.8503 1.18836 58.5498 0.45533C55.5676 -0.0257187 48.1552 -0.163161 45.2594 0.226259Z"
                            fill="#FFFFFF" />
                        <path
                            d="M1.97303 9.22852C0.546741 17.6583 1.10861 27.2793 3.3561 33.3039C5.06333 37.8624 6.81377 40.7487 9.79602 43.8869C14.0533 48.3996 18.8292 50.782 24.9233 51.4234C26.1551 51.5608 27.7327 51.6754 28.4458 51.6754C29.5912 51.6754 29.7209 51.7212 29.5912 52.0648C27.7111 56.9898 26.8899 61.617 26.8899 67.2522C26.8899 73.4829 28.0569 78.7057 30.6933 84.2492C31.5794 86.1047 31.6226 86.1047 28.9213 84.547C23.9293 81.6607 19.6936 77.4916 16.4736 72.2917C12.9728 66.6566 10.7685 60.0364 10.2931 53.737L10.1418 51.8128L8.84516 50.782C6.10063 48.6058 2.79423 44.62 1.15183 41.4817L0.438689 40.1302L0.222585 41.0236C-0.101572 42.4209 -0.0583514 53.485 0.265805 55.7986C2.5349 71.2609 9.86085 83.8598 21.1631 91.6711C27.6246 96.1151 34.6913 98.8181 42.5359 99.8031C45.7558 100.215 53.3627 99.9406 56.4962 99.345C65.4429 97.5811 72.8121 94.0076 79.2088 88.3496C82.969 85.0281 87.7665 78.8432 89.6683 74.8115C91.5052 70.9631 88.7822 66.5191 85.022 67.1605C83.4012 67.4354 82.2343 68.4891 81.1321 70.7111C78.1499 76.7586 73.9358 81.1339 67.8201 84.5928C65.6374 85.8298 61.4882 87.273 59.1327 87.6395C56.4098 88.0747 51.5906 87.8227 49.6889 87.1813C43.8541 85.2113 39.6833 80.2863 38.0841 73.5058C37.6951 71.8565 37.6087 70.8257 37.5871 67.8248C37.5871 62.6937 38.3218 59.3034 40.3964 54.8594C44.6537 45.7195 52.8873 38.8245 63.2171 35.7549C68.1659 34.266 68.9006 34.2202 82.2127 34.1056C88.9335 34.0598 94.6387 33.9682 94.9196 33.9224L95.395 33.8078V28.5392V23.2706L94.8764 23.1331C94.5954 23.0644 89.128 23.0415 82.7313 23.1102C73.2875 23.1789 70.6078 23.2706 68.5981 23.5913C59.4568 25.0115 51.8716 27.9207 45.4317 32.4334C42.6223 34.4263 40.7422 36.0756 38.4515 38.5496L36.4849 40.68H33.6756H30.8878L30.9743 38.1144C31.3849 24.4159 22.3949 13.6496 6.14385 8.40387C4.89044 7.99154 3.59382 7.55631 3.24805 7.44177C2.90228 7.32724 2.55651 7.2356 2.47007 7.2356C2.36202 7.2356 2.14592 8.12898 1.97303 9.22852ZM11.9571 21.1173C15.955 23.4538 19.6504 27.8291 21.1415 31.9982C21.8114 33.8765 22.3517 36.6483 22.3517 38.1602C22.3517 39.5575 22.3949 39.5575 19.6504 38.1602C15.2851 35.9382 12.3244 31.8607 10.9846 26.2714C10.4443 24.0265 10.0553 20.2926 10.3579 20.2926C10.4659 20.2926 11.1791 20.6592 11.9571 21.1173Z"
                            fill="#FFFFFF" />
                        <path
                            d="M72.0577 44.5053C68.3407 44.7573 64.1699 45.6736 61.3389 46.8418C54.6397 49.5907 48.9345 55.2258 45.6065 62.3499C44.4611 64.801 43.2077 68.6036 43.4671 68.8555C43.8993 69.2908 48.5455 70.6194 51.5278 71.1691C53.9049 71.6273 59.8262 71.5586 62.1817 71.0775C69.4428 69.5427 75.1048 65.4653 80.7019 57.7456C81.6959 56.3483 82.6252 55.1571 82.7549 55.0655C82.8629 54.9738 85.7155 54.8822 89.0435 54.8822C94.1652 54.8822 95.1593 54.8364 95.2457 54.5386C95.3105 54.3554 95.397 52.1334 95.4186 49.5907C95.4402 45.3529 95.4186 44.9176 95.0512 44.6428C94.7487 44.4137 92.5228 44.345 83.857 44.3908C77.8925 44.4137 72.5979 44.4595 72.0577 44.5053ZM73.1382 53.943C73.1382 54.3783 69.5509 57.9518 68.1462 58.9139C64.6237 61.342 60.4961 62.3957 56.8223 61.8002L55.5257 61.594L57.3842 59.6698C60.3016 56.6002 63.4567 54.8593 67.433 54.1034C69.3996 53.7369 73.1382 53.6223 73.1382 53.943Z"
                            fill="#FFFFFF" />
                    </svg>
                </div>
                <p class="text-sm font-semibold text-textbase">
                    Dashboard
                    <span class="text-base block text-textbase font-bold tracking-widest">
                        Partner
                    </span>
                </p>
            </a>
            <ul class="flex items-center space-x-4 text-sm font-semibold">
                <li><a href="/partner/dashboard"
                        class="px-2 xl:px-4 py-2 text-textbase rounded-md hover:bg-gray-200">Dashboard</a>
                </li>
                <li class="relative" x-data="{ open: false }">
                    <a x-on:click="open = !open" x-on:click.outside="open = false" href="#"
                        class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200 flex gap-2 items-center">
                        Order
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 stroke-current stroke-2 text-gray-800 transform duration-500 ease-in-out"
                            :class="open ? 'rotate-90' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg> </a>
                    <ul x-cloak x-show="open" x-transition
                        class="absolute top-10 left-0 bg-white p-4 rounded-md shadow overflow-hidden w-64">

                        @php
                            $username = auth()->user()->username;
                        @endphp
                        <li>
                            <a href="/partner/order"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Semua order
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/new"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order terbaru
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/confirmed"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order dikonfirmasi
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/packed"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order dikemas
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/sent"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order dikirim
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/accepted"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order diterima
                            </a>
                        </li>
                        <li>
                            <a href="/partner/order/end"
                                class="p-4 block text-sm text-gray-600 rounded flex items-center gap-2 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                Order selesai
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="/partner/farm"
                        class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">Peternakan </a>
                </li>
                <li><a href="/partner/report"
                        class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">Laporan</a></li>
                <li><a href="/partner/testimonial"
                        class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">Ulasan</a></li>
                <li><a href="/partner/product"
                        class="px-2 xl:px-4 py-2 text-gray-600 rounded-md hover:bg-gray-200">Produk</a></li>
            </ul>
            <ul class="flex space-x-2 xl:space-x-4 text-sm font-semibold">
                <li>
                    <a href="/partner/account">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <div class="flex flex-wrap gap-2 justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 stroke-current text-textbase"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="text-textbase">Pengaturan Akun</p>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="flex items-center gap-6">
                <li>
                    <div
                        class="flex flex-row items-center justify-center rounded-lg gap-2 ring-1 ring-primarybase py-2 px-4">
                        <img src="{{ asset('uploads/' . ($partner->foto_profil ?? 'user.jpeg')) }}"
                            class="w-6 h-6 rounded-full" alt="Foto Profil">
                        <span class="font-semibold text-textbase">
                            {{ $partner->username }}
                        </span>
                    </div>
                </li>
                <li>
                    <a href="{{ route('partner.logout') }}">
                        <div class="p-2 rounded hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-current text-gray-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div x-data="{ open: false }" class="lg:hidden relative flex justify-between w-full">
            <a href="#" class="flex items-start gap-2 group">
                <div class="bg-blue-600 text-white p-3 rounded-md group-hover:bg-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <p class="text-sm font-light uppercase">
                    Dashboard
                    <span class="text-base block font-bold tracking-widest">
                        Partner
                    </span>
                </p>
            </a>
            <button x-on:click="open = !open" type="button" class="bg-gray-200 p-3 rounded-md">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div x-show="open" x-transition class="absolute top-14 left-0 right-0 w-full bg-white rounded-md border">
                <ul class="p-4">
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            My Account
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Transactions
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Cards
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-gray-200">
                        <a href="#" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Offers
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
@endauth
