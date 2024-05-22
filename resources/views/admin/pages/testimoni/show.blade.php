<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>

@extends('admin.layouts.app')

@section('title', 'Dashboard | categorylivestock')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
        <div class="flex flex-col justify-start items-start w-full">
            <div class="p-8 flex text-2xl font-semibold">
                <h1 class="text-textbase text-3xl font-bold">Testimoni dari pembeli {{ $user->nama }}</h1>
            </div>
            <div class="mt-5 bg-white px-8 w-full rounded-lg mb-10">
                <div class="grid grid-cols-2 w-full">
                    <div class="md:flex flex-row justify-start items-start">
                        <div class="">
                            <img src="/uploads/{{ $testimonials->gambar }}" alt="foto-testimoni"
                                class=" w-full object-cover object-center rounded" />
                        </div>
                    </div>
                    <div class="ml-10 md:grid md:grid-cols-2">
                        <div class="">
                            <p class="text-textbase font-semibold text-xl">
                                Judul testimoni
                            </p>
                            <p class="text-textbase mt-5 font-medium text-xl">
                                {{ $testimonials->nama_testimoni }}
                            </p>
                        </div>
                        <div class="">
                            <p class="text-textbase font-semibold text-xl">
                                Deskripsi testimoni
                            </p>
                            <p class="text-textbase mt-5 font-medium text-xl">
                                {{ $testimonials->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
    @endpush
@endsection
