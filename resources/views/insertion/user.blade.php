@extends('layouts.insertion')

@section('back-button')
    @include('components.back-button')
@endsection

@section('header-title')
    @if ($isUpdate)
        <h1 class="mt-8 font-semibold text-3xl">Edit User</h1>
    @else
        <h1 class="mt-8 font-semibold text-3xl">Add User</h1>
    @endif
@endsection

@section('form')
    <form action="{{ $isUpdate ? route('users.update', $user) : route('users.store') }}" method="POST" class="mt-14" id="myForm">
        @csrf
        @if ($isUpdate)
            @method('PATCH')
        @endif
        <x-insertion-form>
            <x-slot name="left_side">
                <div class="space-y-2 flex flex-col">
                    <label for="User Name:">User Name: </label>
                    <input type="text" name="user_name" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" value="{{ $isUpdate ? $user->name : old('user_name') }}" required>
                    @error('user_name')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="User Password">User Password: </label>
                    <input type="password" name="user_password" class="{{ $isUpdate ? 'disabled' : '' }} w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        required>
                    @error('user_password')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
            <x-slot name="right_side">
                <div class="space-y-2 flex-col">
                    <label for="User Email">User Email: </label>
                    <input type="email" name="user_email" class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" value="{{ $isUpdate ? $user->email : old('user_email') }}"
                        required>
                    @error('user_email')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="User Role">User Role: </label>
                    <select name="role_id" class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" required>
                        @if ($isUpdate)
                            <option value="{{ $user->role->id }}" selected>{{ $user->role->name }}</option>
                        @endif
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
        </x-insertion-form>
    </form>
@endsection

@section('confirm-button')
    <a onclick="document.getElementById('myForm').submit(); return false;">
        @include('components.confirm-button')
    </a>
@endsection
