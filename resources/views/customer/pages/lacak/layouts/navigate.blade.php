@extends('customer.layouts.app')

@section('title', 'Customer | Order')

@section('content')
    <div class="bg-white sm:px-0 ">
        <div class="border md:py-6 md:px-10 py-1 px-2">
            <div class="md:gap-x-8 gap-x-1 flex items-center justify-between">
                <a href="{{ route('customer.lacak') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Semua</a>
                <a href="{{ route('customer.lacak.new') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Baru</a>
                <a href="{{ route('customer.lacak.confirmed') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Dikonfirmasi</a>
                <a href="{{ route('customer.lacak.packed') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Dikemas</a>
                <a href="{{ route('customer.lacak.sent') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Dikirim</a>
                <a href="{{ route('customer.lacak.end') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Selesai</a>
            </div>
        </div>
    </div>
    @yield('track')
    @push('js')
    @endpush
@endsection
