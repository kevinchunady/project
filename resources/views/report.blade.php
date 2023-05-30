@extends('layouts.app')

@section('content')

@include('layouts.header', ['string' => 'Add Product'])

<table class="w-full">
    {{-- THead --}}
    <div class="flex flex-row bg-clightblue w-full items-end text-cdarkblue text-xs font-semibold uppercase">
        <div class="flex flex-col py-2 px-3 w-32 items-center border border-r-black border-t-0 border-b-0 h-full space-y-6">
            <div>
                <h2 class="opacity-0">Hidden</h2>
            </div>
            <div>
                <h2>ID</h2>
            </div>
        </div>
        <div class="flex flex-col py-2 px-3 w-32 items-center h-full">
            <div></div>
            <div>
                <h2>Kam</h2>
            </div>
        </div>
        <div class="flex flex-col py-2 px-3 w-40 items-center border border-r-black border-t-0 border-b-0 border-l-black h-full space-y-6">
            <div>
                <h2>Entry</h2>
            </div>
            <div class="flex flex-row justify-between w-full">
                <h2>Date</h2>
                <h2>Time</h2>
            </div>
        </div>
        <div class="flex flex-col py-2 px-3 w-96 items-center border border-r-black border-t-0 border-b-0 border-l-0 h-full space-y-6">
            <div>
                <h2>Purchase Order</h2>
            </div>
            <div class="flex flex-row justify-between w-full">
                <h2>Items</h2>
                <h2>Purchase Number</h2>
                <h2>PO Date</h2>
            </div>
        </div>
        <div class="flex flex-col py-2 px-3 w-32 items-center h-full">
            <div></div>
            <div>
                <h2>Actions</h2>
            </div>
        </div>
    </div>
    {{-- End of Thead --}}
    {{-- Start of TR --}}
    <div class="flex flex-row w-full items-center pt-3 text-sm">
        <div class="px-3 w-32 text-center">
            <h2 class="font-medium">0001</h2>
        </div>
        <div class="px-3 w-32 text-start">
            <h2 class="font-medium">Ann Culhane Wijaya</h2>
        </div>
        <div class="px-3 w-40 flex flex-row font-normal justify-between">
            <h2>16-Mar-23</h2>
            <h2 class="text-end">17:30</h2>
        </div>
        <div class="px-3 w-96 flex flex-row font-normal justify-between">
            <img src="{{ asset('images/items-table-logo.png') }}" alt="Items Table Logo" class="w-3 h-4">
            <h2>CANDY/12/2022/2368</h2>
            <h2>15/03/2023</h2>
        </div>
        <a href="#" class="py-2 px-3 w-32 items-center flex flex-col">
            <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5">
        </a>
    </div>
    <div class="flex flex-row w-full items-center pt-3 text-sm bg-clightblue2">
        <div class="px-3 w-32 text-center">
            <h2 class="font-medium">0001</h2>
        </div>
        <div class="px-3 w-32 text-start">
            <h2 class="font-medium">Ann Culhane Wijaya</h2>
        </div>
        <div class="px-3 w-40 flex flex-row font-normal justify-between">
            <h2>16-Mar-23</h2>
            <h2 class="text-end">17:30</h2>
        </div>
        <div class="px-3 w-96 flex flex-row font-normal justify-between">
            <img src="{{ asset('images/items-table-logo.png') }}" alt="Items Table Logo" class="w-3 h-4">
            <h2>CANDY/12/2022/2368</h2>
            <h2>15/03/2023</h2>
        </div>
        <a href="#" class="py-2 px-3 w-32 items-center flex flex-col">
            <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5">
        </a>
    </div>
    {{-- End of TR --}}
</table>

@endsection