@extends('customer.layouts.app')

@section('title', 'Dashboard | Customer')

@section('content')
    <p>ini dashboard user</p>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            const token = localStorage.getItem('token-customer');
            console.log(`Ini token customer: ${token}`);
        </script>
    @endpush
@endsection
