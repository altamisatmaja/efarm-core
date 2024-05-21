<!-- component -->
@extends('customer.layouts.app')

@section('title', 'Customer | Order')

@section('content')
    <div class="py-3 w-full sm:mx-auto">
        <div class="bg-white flex flex-col rounded-xl shadow-lg">
            <div class="px-12 py-5">
                <h2 class="text-textbase text-3xl font-semibold">Berikan review Anda untuk produk ini</h2>
            </div>
            <form action="{{ route('customer.review.store') }}" method="POST">
                @csrf
                <div class="w-full flex flex-col items-center" x-data="{ rating: 0 }">
                    <div class="flex flex-col items-center py-6 space-y-3">
                        <span class="text-lg text-textbase">Bagimana produk menurut anda?</span>
                        <div class="flex flex-wrap">
                            @for ($i = 1; $i < 6; $i++)
                                <div class="flex space-x-3">
                                    <input class="invisible" type="radio" name="rating" id="rating{{ $i }}"
                                        value="{{ $i }}" x-on:click="rating = {{ $i }}">
                                    <label for="rating{{ $i }}">
                                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                            x-bind:class="{ 'text-yellow-400': rating >=
                                                {{ $i }}, 'text-gray-400': rating < {{ $i }} }">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                    </label>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <input hidden name="id_product" value="{{ $product->id }}" type="text">
                    <input hidden name="id_user" value="{{ auth()->user()->id }}" type="text">
                    <div class="w-3/4 flex flex-col">
                        <textarea placeholder="Tulis review anda" name="review" rows="3"
                            class="p-4 text-gray-500 rounded-xl resize-none"></textarea>
                        <button type="submit"
                            class="py-3 my-8 text-lg bg-primarybase rounded-xl text-white">Rating</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection
