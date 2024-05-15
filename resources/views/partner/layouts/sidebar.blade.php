<aside
    class="sidebar w-72 items-center -translate-x-full transform p-4 transition-transform duration-150 ease-in md:translate-x-0 ">
    <div class="w-full bg-gray-50 flex justify-center items-center">
        <div class="h-56 w-72 absolute flex justify-center items-center">
            <img class="object-cover h-20 w-20 rounded-full"
                src="https://images.unsplash.com/photo-1484608856193-968d2be4080e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80"
                alt="" />
        </div>
        <div class="h-56 mx-4 w-5/6 bg-primarybase rounded-3xl shadow-md sm:w-80 sm:mx-0">
            <div class="h-1/2 w-full flex justify-center items-baseline px-3 py-5">
                <h1 class="text-white font-semibold text-2xl">Profile</h1>
            </div>

            <div class="bg-white w-full rounded-3xl flex flex-col justify-around items-center">
                <div class="p-6 text-center">
                    <h4
                        class="mb-2 mt-6 block font-sans text-2xl font-semibold leading-snug tracking-normal text-textbase antialiased">
                        Altamis Atmaja
                    </h4>
                    <p
                        class="text-textbase text-xl font-semibold leading-relaxed antialiased">
                        Partner
                    </p>
                </div>
                <div class="border-t border-slate-500 w-4/5"></div>
                <div class="py-6 px-6  relative flex flex-col justify-end">
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-textbase">
                        Record-breaking Profits</h4>
                    <p class="block antialiased font-sans text-base leading-relaxed text-textbase my-2 font-normal">
                        We are proud to announce that our bank has achieved record-breaking profits this year. </p>
                </div>
                <div class="border-t border-slate-500 w-4/5"></div>
                <div class="p-6 text-center w-full flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                        </path>
                    </svg>
                    <p class="">{{ auth()->user()->email }}</p>
                </div>
            </div>
        </div>
    </div>
</aside>
