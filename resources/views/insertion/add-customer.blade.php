@extends('layouts.insertion')

@section('back-button')
    @include('components.back-button')
@endsection

@section('header-title')
    <h1 class="mt-8 font-semibold text-3xl">Add Customer</h1>
@endsection

@section('form')
    <form action="#" method="POST" class="mt-14" id="myForm">
        @csrf
        <x-insertion-form>
            <x-slot name="left_side">
                <div class="space-y-2 flex flex-col">
                    <label for="Customer Name:">Customer Name: </label>
                    <input type="text" name="customer_name" class="w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        required>
                    @error('customer_name')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Customer Address">Customer Address: </label>
                    <input type="text" name="address" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                    @error('address')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Customer Type">Customer Type: </label>
                    <select name="customer_type" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                        <option value="placeholder" selected>Placeholder</option>
                    </select>
                    @error('customer_type')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
            <x-slot name="right_side">
                <div class="space-y-2 flex-col">
                    <label for="Customer NPWP">Customer NPWP: </label>
                    <input type="text" name="customer_npwp"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" required>
                    @error('customer_npwp')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Phone Number">Phone Number: </label>
                    <input type="tel" name="phone_number" class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5"
                        placeholder="+62" required>
                    @error('phone_number')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="TOP">TOP: </label>
                    <input type="number" name="customer_top" min="1"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" placeholder="DAY(S)" required>
                    @error('customer_top')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
        </x-insertion-form>
    </form>
@endsection

@section('confirm-button')
    <a href="#" onclick="document.getElementById('myForm').submit(); return false;">
        @include('components.confirm-button')
    </a>
@endsection
