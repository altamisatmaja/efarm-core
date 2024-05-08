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

@section('title', 'Dashboard | Review')

@section('content')
    <section class="w-full px-4 mx-auto">
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                {{-- ignored really --}}
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Review dari user</h3>
                        </div>
                    </div>
                </div>
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>No</span>
                                            </button>
                                        </div>
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Tanggal
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Nama produk
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Nama pelanggan
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Rating
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Review
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($review as $reviews)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $reviews->created_at->format('d M Y') }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">{{ $reviews->products->nama_product }}</td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                                <h2 class="text-sm font-normal">{{ $reviews->user->nama }}</h2>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                                <h2 class="text-sm font-normal">{{ $reviews->rating }}</h2>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                                <h2 class="text-sm font-normal">{{ $reviews->review }}</h2>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-4 text-sm font-normal text-gray-500">
                                            <div class="gap-x-3">
                                                <div class="flex item-center justify-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST"
                                                        action="{{ route('admin.review.destroy', $reviews->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
                                                            <div
                                                                class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
    @endpush
@endsection
