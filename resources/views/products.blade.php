@extends('layouts.app')

@section('content')
    @include('layouts.header', ['string' => 'Add Product'])

    <table class="w-full">
        {{-- THead --}}
        <div
            class="flex flex-row bg-clightblue w-full text-cdarkblue text-xs font-semibold uppercase justify-between text-center items-center">
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Product ID</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Product Name</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Product Picture</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Product Price</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Product Weight</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Actions</h2>
            </div>
        </div>
        {{-- End of Thead --}}
        {{-- Start of TR --}}
        <div class="flex flex-row w-full items-start py-4 text-sm justify-between font-medium text-center">
            <div class="px-3 w-full">
                <h2>P0001</h2>
            </div>
            <div class="px-3 w-full">
                <h2>Kacang Tanah</h2>
            </div>
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('images/kacang-tanah.png') }}" alt="Kacang Tanah" class="w-20 h-20">
            </div>
            <div class="px-3 w-full">
                <h2>Rp 50.000</h2>
            </div>
            <div class="px-3 w-full">
                <h2>1 kg</h2>
            </div>
            <div class="px-3 w-full flex flex-row items-center justify-center space-x-10">
                <a href="#">
                    <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5">
                </a>
                <a href="#">
                    <img src="{{ asset('images/trash-logo.png') }}" alt="Trash Logo" class="w-5 h-5">
                </a>
            </div>
        </div>
        <div class="flex flex-row w-full items-start py-4 text-sm justify-between font-medium text-center bg-clightblue2">
            <div class="px-3 w-full">
                <h2>P0001</h2>
            </div>
            <div class="px-3 w-full">
                <h2>Kacang Tanah</h2>
            </div>
            <div class="w-full flex flex-col items-center">
                <img src="{{ asset('images/kacang-tanah.png') }}" alt="Kacang Tanah" class="w-20 h-20">
            </div>
            <div class="px-3 w-full">
                <h2>Rp 50.000</h2>
            </div>
            <div class="px-3 w-full">
                <h2>1 kg</h2>
            </div>
            <div class="px-3 w-full flex flex-row items-center justify-center space-x-10">
                <a href="#">
                    <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5">
                </a>
                <a href="#">
                    <img src="{{ asset('images/trash-logo.png') }}" alt="Trash Logo" class="w-5 h-5">
                </a>
            </div>
        </div>
        {{-- End of TR --}}
    </table>

@endsection
