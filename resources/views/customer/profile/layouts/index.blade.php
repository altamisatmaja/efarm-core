@extends('customer.layouts.app')

@section('title', 'Customer | Account')

@section('content')
    <div class="bg-white">
        <div class="border py-6 px-10">
            <div class="gap-x-8 flex items-center justify-between">
                <a href="{{ route('customer.account.detail') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Akun</a>
                <a href="{{ route('customer.account.information') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Informasi</a>
                <a href="{{ route('customer.account.address') }}" class="text-textbase text-lg cursor-pointer rounded-sm py-1 px-2 font-medium hover:bg-gray-100">Alamat</a>
            </div>
        </div>
    </div>
    @yield('account')
    @push('js')
    @endpush
@endsection
