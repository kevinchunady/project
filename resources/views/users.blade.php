@extends('layouts.app')

@section('content')
    @include('layouts.header', ['string' => 'Add User'])

    <x-table>
        <x-slot name="header">
            <tr>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">User ID</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">User Name</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">User Email</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">User Role</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Actions</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            <tr>
                <td class="py-6">U0001</td>
                <td>Kevin Chunady</td>
                <td>kevinchunady@gmail.com</td>
                <td>Owner</td>
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
            <tr class="bg-clightblue2">
                <td class="py-6">U0001</td>
                <td>Kevin Chunady</td>
                <td>kevinchunady@gmail.com</td>
                <td>Owner</td>
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
        </x-slot>
    </x-table>

@endsection
