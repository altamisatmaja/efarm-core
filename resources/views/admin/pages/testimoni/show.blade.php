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
                <h1>Testimoni dari pembeli lain</h1>
            </div>
            <div class="w-full flex justify-start items-start flex-col px-8 pb-4">
                <div class="flex mb-4 items-center">
                            <span class="flex items-center">
                                @php
                                    $rating = (int) $hasil_reviews;
                                    if ($rating) {
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rating) {
                                                echo '<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500"';
                                                echo ' viewBox="0 0 24 24">';
                                                echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                                echo '></path>';
                                                echo '</svg>';
                                            } else {
                                                echo '<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500"';
                                                echo ' viewBox="0 0 24 24">';
                                                echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                                echo '></path>';
                                                echo '</svg>';
                                            }
                                        }
                                    } else {
                                        for ($i = 1; $i <= 5; $i++) {
                                                echo '<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500"';
                                                echo ' viewBox="0 0 24 24">';
                                                echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                                echo '></path>';
                                                echo '</svg>';
                                        }
                                    }
                                @endphp
                                <p class="text-gray-600 font-bold text-sm ml-1">
                                    {{ $hasil_reviews }}
                                    <span class="text-gray-500 font-normal">({{ $banyak_reviewers }} reviews)</span>
                                </p>
                            </span>
                        </div>
                <div class="mt-6 flex justify-start items-center flex-row space-x-2.5">
                    <div>
                        <img src="/uploads/{{ $user->profile_photo_path }}" class="w-auto h-10 rounded-full"
                            alt="fotoprofil" />
                    </div>
                    <div class="flex flex-col justify-start items-start space-y-2">
                        <p class="text-base font-medium leading-none text-gray-800 ">{{ $user->nama }}</p>
                    </div>
                </div>
                <p class="text-xl md:text-2xl mt-2 font-medium leading-normal text-gray-800">{{ $testimonials->nama_testimoni }}</p>
                <div id="menu" class="md:block">
                    <p class="mt-3 text-base leading-normal text-gray-600  w-full md:w-9/12 xl:w-5/6">
                        {{ $testimonials->deskripsi }}</p>
                    <div class="hidden md:flex mt-6 flex-row justify-start items-start space-x-4">
                        <div class="">
                            <img src="/uploads/{{ $testimonials->gambar }}"
                                alt="chair-1" />
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
