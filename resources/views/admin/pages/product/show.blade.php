@extends('admin.layouts.app')

@section('title', 'Dashboard | Create Product')

@section('content')
    <!-- component -->
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-2 py-2 mx-auto">
            <div class="lg:w-full mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                    src="/uploads/{{ $product->gambar_hewan }}">
                <div class="md:flex-1 px-4">

                    <h2 class="mb-2 leading-tight pt-2 tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                        {{ $product->nama_product }}</h2>
                    <div class="flex justify-between item-center">
                        <p class="text-gray-500 font-medium hidden md:block">Kambing</p>
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
                            <div
                                class="ml-8 bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block">
                                {{ $product->terjual }} Terjual</div>
                        </div>
                    </div>
                    <div class="flex items-center my-1">
                        <div>
                            <div class="rounded-lg flex py-2">
                                <span class="text-textbase mr-1 mt-1">Rp</span>
                                <span class="font-bold text-primarybase text-3xl">{{ $product->harga_product }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-4xl bg-white w-full rounded-lg">
                        <div class="">
                            <h2 class="text-2xl ">
                                Detail hewan
                            </h2>
                        </div>
                        <div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-gray-600">
                                    Gender hewan
                                </p>
                                @foreach ($product->gender_livestocks as $gender)
                                    <p>
                                        {{ $gender->nama_gender }}
                                    </p>
                                @endforeach
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-gray-600">
                                    Usia hewan
                                </p>
                                <p>
                                    {{ $product->lahir_hewan }} Bulan
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-gray-600">
                                    Berat hewan
                                </p>
                                <p>
                                    {{ $product->berat_hewan_ternak }} kg
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-gray-600">
                                    Stok
                                </p>
                                <p>
                                    {{ $product->stok_hewan_ternak }} ekor
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-gray-600">
                                    Deskripsi
                                <p class="text-gray-500">{{ $product->deskripsi_product }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="flex flex-col">
                        <div class="h-px  bg-slate-400"></div>
                    </div> --}}
                </div>
                <div class="lg:w-full w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    @foreach ($product->partner as $partners)
                        <div class="max-w-4xl bg-white w-full rounded-lg">
                            <div class="sm:flex sm:justify-between py-2">
                                <div class="flex items-center">
                                    <div class="flex items-start justify-start">
                                        <img class="h-12 w-12 rounded-full"
                                            src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g"
                                            alt="">
                                        <div class="ml-2 flex flex-col">
                                            <h3 class="text-lg text-gray-800 font-medium">{{ $partners->nama_partner }}
                                            </h3>
                                            <span class="text-gray-600">Peternakan
                                                {{ $partners->nama_perusahaan_partner }}</span>
                                            <span class="text-gray-600">{{ $partners->alamat_partner }},
                                                {{ $partners->kecamatan_partner }}, {{ $partners->kabupaten_partner }},
                                                {{ $partners->provinsi_partner }}</span>
                                            <div
                                                class="md:grid md:grid-cols-2 gap-4 grid grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                                <p class="text-gray-600 w-full">Bergabung
                                                    {{ $partners->created_at->diffForHumans() }}</p>
                                                <p class="w-full">Peternakan {{ $partners->lama_peternakan_berdiri }} Tahun
                                                    berdiri</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-2 sm:mt-0">
                                    <button
                                        class="flex items-center text-white bg-blue-600 rounded px-2 py-1 hover:bg-blue-500 focus:outline-none focus:shadow-outline">
                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span class="ml-1 text-sm">Hubungi</span>
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="h-px  bg-slate-400"></div>
                            </div>
                            <div class="">
                                <h2 class="text-2xl ">
                                    Pengiriman
                                </h2>
                            </div>
                            <div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Dikirim dari
                                    </p>
                                    <p>
                                        {{ $partners->kabupaten_partner }}
                                    </p>
                                </div>
                                <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                    <p class="text-gray-600">
                                        Melalui
                                    </p>
                                    <p>
                                        Internal Kontaner
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="h-px  bg-slate-400"></div>
                        </div>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST"
                            action="{{ route('admin.product.status', $product->slug_product) }}">
                            @csrf
                            @method('PUT')
                            @php
                                $statusEnum = ['Aktif', 'Tidak Aktif']
                            @endphp
                            <div class="pb-4">
                                <label for="status">Status Produk *</label>
                                <select name="status" id="status"
                                    class="status border p-2 rounded w-full">
                                    @foreach ($statusEnum as $item)
                                        <option value="{{ $item }}" {{ $product->status == $item ? 'selected' : '' }}>{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="pb-4">
                                <button type="submit"
                                    class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @push('js')
    @endpush
@endsection
