@extends('partner.layouts.app')

@section('title', 'Dashboard | Testimonial')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col justify-start items-start w-full">
            <div class="p-8 flex text-2xl font-semibold">
                <h1>Testimoni dari pembeli {{ $testimonials->user->nama }}</h1>
            </div>
            <div class="w-full flex justify-start items-start flex-col px-8 pb-4">
                <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                    <div>
                        <img src="/uploads/{{ $testimonials->user->profile_photo_path }}" class="w-10 h-10 rounded-full"
                            alt="fotoprofil" />
                    </div>
                    <div class="flex flex-col justify-start items-start space-y-2">
                        <p class="text-base font-medium leading-none text-gray-800 ">{{ $testimonials->user->nama }}</p>
                    </div>
                </div>
                <p class="text-xl md:text-2xl mt-2 font-medium leading-normal text-gray-800">
                    {{ $testimonials->nama_testimoni }}</p>
                <div id="menu" class="md:block">
                    <p class="mt-3 text-base leading-normal text-gray-600  w-full md:w-9/12 xl:w-5/6">
                        {{ $testimonials->deskripsi }}</p>
                    <div class="hidden md:flex mt-6 flex-row justify-start items-start space-x-4">
                        <div class="">
                            <img src="/uploads/{{ $testimonials->gambar }}" alt="chair-1" />
                        </div>
                    </div>
                    <div class="md:hidden carousel pt-8 cursor-none"
                        data-flickity='{ "wrapAround": true,"pageDots": false }'>
                        <div class="carousel-cell">
                            <div class="md:w-1/2 h-1/2 relative">
                                <img src="https://i.ibb.co/QXzVpHp/vincent-wachowiak-8g-Cm-EBVl6a-I-unsplash-1.png"
                                    alt="bag" class="w-full h-full object-fit object-cover" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <form action="{{ route('partner.testimonial.reply.store') }}" method="POST">
            @csrf
            <input name="id_testimonial" value="{{ $testimonials->id }}" type="number">
            <div class="mb-5">
                <label for="deskripsi" class="mb-3 block text-base font-medium text-[#07074D]">
                    Masukkan deskripsi testimoni anda
                </label>
                <textarea placeholder="Tulis review anda" name="pesan_reply" rows="3" class="p-4 text-gray-500 rounded-lg w-full "></textarea>
            </div>
            <div>
                <button type="submit"
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Ulas
                </button>
            </div>
        </form>
    </div>
@endsection
