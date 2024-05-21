<!-- component -->
@extends('customer.layouts.app')

@section('title', 'Customer | Testimonial')

@section('content')
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full  bg-white">
            <form class="py-6 px-9" action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="nama_testimoni" class="mb-3 block text-base font-medium text-[#07074D]">
                        Judul testimoni
                    </label>
                    <input type="text" name="nama_testimoni" id="nama_testimoni" placeholder="example@domain.com"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="deskripsi" class="mb-3 block text-base font-medium text-[#07074D]">
                        Masukkan deskripsi testimoni anda
                    </label>
                    <textarea placeholder="Tulis review anda" name="deskripsi" rows="3" class="p-4 text-gray-500 rounded-lg w-full "></textarea>
                </div>
                <input hidden name="id_products" value="{{ $product->id }}" type="text">
                <input hidden name="id_user" value="{{ auth()->user()->id }}" type="text">
                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                        Upload File
                    </label>

                    <div class="mb-8">
                        <input type="file" name="gambar" id="gambar" class="sr-only" />
                        <label for="gambar"
                            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                            <div>
                                <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                    Drop files here
                                </span>
                                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                    Or
                                </span>
                                <span
                                    class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                    Browse
                                </span>
                            </div>
                        </label>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Ulas
                    </button>
                </div>
            </form>
        </div>
    </div>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
