@extends('layouts.app')

@section('content')
    @include('layouts.header', ['link' => 'add-product', 'string' => 'Add Product'])

    <x-table>
        <x-slot name="header">
            <tr>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Product ID</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Product Name</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Product Picture</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Product Price</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Product Weight</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Actions</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($products as $product)
                @if ($product->id % 2 == 0)
                    <tr class="bg-clightblue2">
                        <td class="py-6">{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <div class="w-full flex flex-col items-center py-3">
                                <img src="{{ asset('storage/'.$product->picture) }}" alt="Kacang Tanah" class="w-20 h-20">
                            </div>
                        </td>
                        <td>Rp {{ $product->price }}</td>
                        <td>{{ $product->weight }} kg</td>
                        <td>
                            <div class="px-3 w-full flex flex-row items-center justify-center space-x-10">
                                <a href="#">
                                    <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/trash-logo.png') }}" alt="Trash Logo" class="w-5 h-5">
                                </a>
                            </div>
                        </td>
                    </tr>
                @else
                    <tr>
                        <td class="py-6">{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <div class="w-full flex flex-col items-center py-3">
                                <img src="{{ asset($product->picture) }}" alt="Kacang Tanah" class="w-20 h-20">
                            </div>
                        </td>
                        <td>Rp {{ $product->price }}</td>
                        <td>{{ $product->weight }} kg</td>
                        <td>
                            <div class="px-3 w-full flex flex-row items-center justify-center space-x-10">
                                <a href="#">
                                    <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('images/trash-logo.png') }}" alt="Trash Logo" class="w-5 h-5">
                                </a>
                            </div>
                        </td>
                    </tr>
                @endif                
            @endforeach
        </x-slot>
    </x-table>

@endsection
