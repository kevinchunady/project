@extends('layouts.insertion')

@section('back-button')
    @include('components.back-button')
@endsection

@section('header-title')
    @if ($isUpdate)
        <h1 class="mt-8 font-semibold text-3xl">Edit Customer</h1>
    @else
        <h1 class="mt-8 font-semibold text-3xl">Add Customer</h1>
    @endif
@endsection

@section('form')
    <form action="{{ $isUpdate ? route('customers.update', $customer) : route('customers.store') }}" method="POST" class="mt-14" id="myForm">
        @csrf
        @if ($isUpdate)
            @method('PATCH')
        @endif
        <x-insertion-form>
            <x-slot name="left_side">
                <div class="space-y-2 flex flex-col">
                    <label for="Trade Name:">Trade Name: </label>
                    <input type="text" name="trade_name" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" value="{{ $isUpdate ? $customer->trade_name : old('trade_name') }}"
                        required>
                    @error('trade_name')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Customer Type">Customer Type: </label>
                    <select name="customer_type" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                        @if ($isUpdate)
                            <option value="{{ $isUpdate ? $customer->type->id : old('customer_type') }}" selected>{{ $isUpdate ? $customer->type->name : '' }}</option>
                        @endif
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    @error('customer_type')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="TOP">TOP: </label>
                    <input type="number" name="customer_top" min="1" value="{{ $isUpdate ? $customer->top : old('customer_top') }}"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" placeholder="DAY(S)" required>
                    @error('customer_top')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="Street Name">Street Name: </label>
                    <input type="text" name="street_name" value="{{ $isUpdate ? $customer->address->street_name : old('street_name') }}"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" required>
                    @error('street_name')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="City">City: </label>
                    <input type="text" name="city" min="1" value="{{ $isUpdate ? $customer->address->city : old('city') }}"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" placeholder="Jakarta Selatan" required>
                    @error('city')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
            <x-slot name="right_side">
                <div class="space-y-2 flex flex-col">
                    <label for="Outlet Name:">Outlet Name: </label>
                    <input type="text" name="outlet_name" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" value="{{ $isUpdate ? $customer->outlet_name : old('outlet_name') }}"
                        required>
                    @error('outlet_name')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="Customer NPWP">Customer NPWP: </label>
                    <input type="text" name="customer_npwp" value="{{ $isUpdate ? $customer->npwp : old('customer_npwp') }}"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" required>
                    @error('customer_npwp')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Phone Number">Phone Number: </label>
                    <input type="tel" name="phone_number" class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" value="{{ $isUpdate ? $customer->phone_number : old('phone_number') }}"
                        placeholder="+62" required>
                    @error('phone_number')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                <div class="space-y-2 flex-col">
                    <label for="Province">Province: </label>
                    <input type="text" name="province" min="1" value="{{ $isUpdate ? $customer->address->province : old('province') }}"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" placeholder="DKI Jakarta" required>
                    @error('province')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="Postal Code">Postal Code: </label>
                    <input type="number" name="postal_code" min="1" value="{{ $isUpdate ? $customer->address->postal_code : old('postal_cide') }}"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" required>
                    @error('postal_code')
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