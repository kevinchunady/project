@extends('layouts.app')

@section('content')
    @include('layouts.header', ['string' => 'Add Customer'])

    <table class="w-full">
        {{-- THead --}}
        <div
            class="flex flex-row bg-clightblue w-full text-cdarkblue text-xs font-semibold uppercase justify-between text-center items-center">
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Customer ID</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Customer Name</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>NPWP</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Address</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Phone Number</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Customer Type</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>TOP</h2>
            </div>
            <div class="py-2 px-3 border border-r-black border-t-0 border-b-0 border-l-0 w-full">
                <h2>Actions</h2>
            </div>
        </div>
        {{-- End of Thead --}}
        {{-- Start of TR --}}
        <div class="flex flex-row w-full items-start py-4 text-sm justify-between font-base text-center">
            <div class="px-3 w-full">
                <h2>C0001</h2>
            </div>
            <div class="px-3 w-full uppercase text-start">
                <h2>PT. Hero Supermarket</h2>
            </div>
            <div class="px-3 w-full uppercase text-start">
                <h2>08.178.554.2-123.321</h2>
            </div>
            <div class="px-3 w-full text-start">
                <h2>Jalan Puncak No. 5</h2>
            </div>
            <div class="px-3 w-full">
                <h2>087889961726</h2>
            </div>
            <div class="px-3 w-full">
                <h2>Distributor</h2>
            </div>
            <div class="px-3 w-full uppercase">
                <h2>7 <span class="text-cgray">day(s)</span> </h2>
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
        <div class="flex flex-row w-full items-start py-4 text-sm justify-between font-base text-center bg-clightblue2">
            <div class="px-3 w-full">
                <h2>C0001</h2>
            </div>
            <div class="px-3 w-full uppercase text-start">
                <h2>PT. Hero Supermarket</h2>
            </div>
            <div class="px-3 w-full uppercase text-start">
                <h2>08.178.554.2-123.321</h2>
            </div>
            <div class="px-3 w-full text-start">
                <h2>Jalan Puncak No. 5</h2>
            </div>
            <div class="px-3 w-full">
                <h2>087889961726</h2>
            </div>
            <div class="px-3 w-full">
                <h2>Distributor</h2>
            </div>
            <div class="px-3 w-full uppercase">
                <h2>7 <span class="text-cgray">day(s)</span> </h2>
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
