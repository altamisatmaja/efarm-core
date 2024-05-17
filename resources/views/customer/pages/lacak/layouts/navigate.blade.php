@extends('customer.layouts.app')

@section('title', 'Customer | Order')

@section('content')
    <div class="bg-white">
        <div class="border py-6 px-10">
            <div class="gap-x-8 flex items-center justify-between">
                <a href="{{ route('customer.lacak') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Semua</a>
                <a href="{{ route('customer.lacak.new') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Baru</a>
                <a href="{{ route('customer.lacak.confirmed') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Dikonfirmasi</a>
                <a href="{{ route('customer.lacak.packed') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Dikemas</a>
                <a href="{{ route('customer.lacak.sent') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Dikirim</a>
                <a href="{{ route('customer.lacak.end') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Selesai</a>
            </div>
        </div>
    </div>
    @yield('track')
    @push('js')
    @endpush
@endsection
