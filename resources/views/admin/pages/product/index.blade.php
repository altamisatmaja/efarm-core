@extends('admin.layouts.app')

@section('title', 'Dashboard | Semua Product')

@section('content')
    <!-- component -->
    <section class="container px-4 mx-auto">
        <div class="pb-5">
            <ol class="flex items-center gap-4">
                <li>
                    <div
                        class="flex items-center text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a href="{{ route('admin.dashboard') }}">Beranda </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('admin.product.list') }}"> Produk </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-xl text-textbase">Product</h3>
                        </div>
                    </div>
                </div>
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Tanggal
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Nama Product
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Harga
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Gambar
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Nama Kategori
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Jenis Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Gender Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Umur
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Berat
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Stok
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Terjual
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Partner
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($product as $products)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $products->created_at->format('d M Y') }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">{{ $products->nama_product }}</td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div
                                                class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                                <h2 class="text-sm font-normal">@currency($products->harga_product)</h2>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap align-middle">
                                            <div class="flex gap-1 flex-col items-center justify-center">
                                                <img class="object-cover w-14 h-14 rounded-lg"
                                                    src="/uploads/{{ $products->gambar_hewan }}" alt="">
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            @foreach ($products->categoryproduct as $categoryproducts)
                                                {{ $categoryproducts->nama_kategori_product }}
                                            @endforeach
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            @foreach ($products->typelivestocks as $typelivestock)
                                                {{ $typelivestock->nama_jenis_hewan }}
                                            @endforeach
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            @foreach ($products->gender_livestocks as $gender_livestock)
                                                {{ $gender_livestock->nama_gender }}
                                            @endforeach
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $products->lahir_hewan }} tahun</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $products->berat_hewan_ternak }} kg</td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $products->stok_hewan_ternak }} ekor
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $products->terjual }} ekor
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 align-middle">
                                            <div class="flex gap-1 flex-col items-center justify-center">
                                                @foreach ($products->partner as $partner)
                                                    <img class="object-cover w-8 h-8 rounded-lg"
                                                        src="/uploads/{{ $partner->foto_profil }}" alt="">

                                                <div>
                                                    <p
                                                        class="text-xs font-normal align-middle text-center items-center text-gray-600">
                                                        {{ $partner->nama_partner }}
                                                    </p>
                                                </div>
                                                @endforeach
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $products->status }}
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap text-gray-500">
                                            <a href="{{ route('admin.product.show', $products->slug_product) }}">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div>
                                            </a>
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
