@extends('layouts.app')

@section('content')
    @include('layouts.header', ['link' => 'add-user' ,'string' => 'Add User'])

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
            @foreach ($users as $user)
                <tr>
                    <td class="py-6">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
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
            @endforeach
        </x-slot>
    </x-table>

@endsection
