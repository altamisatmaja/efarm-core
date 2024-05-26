@extends('customer.layouts.app')

@section('title', 'Customer | Account')

@section('content')
    <div class="bg-white sm:px-0 ">
        <div class="border md:py-6 md:px-10 py-1 px-2">
            <div class="md:gap-x-8 gap-x-1 flex items-center justify-between">
                <a href="{{ route('customer.account.detail') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Akun</a>
                <a href="{{ route('customer.account.information') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Informasi</a>
                <a href="{{ route('customer.account.address') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Alamat</a>
            </div>
        </div>
    </div>
    @yield('account')
    @push('js')
    @endpush
@endsection
