@extends('layouts.insertion')

@section('back-button')
    <a href="#">
        @include('components.back-button')
    </a>
@endsection

@section('header-title')
    <h1 class="mt-8 font-semibold text-3xl">Add Order</h1>
@endsection

@section('form')
    <form action="#" method="POST" class="mt-14" id="myForm">
        @csrf
        <x-insertion-form>
            <x-slot name="left_side">
                <div class="space-y-2 flex flex-col">
                    <label for="Customer">Customer: </label>
                    <select name="customer_id" class="w-1/2 h-16 rounded-lg px-4 shadow-lg border-none" required>
                        <option value="Test" selected>Test</option>
                    </select>
                    @error('customer')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="PO Date">PO Date: </label>
                    <input type="date" name="po_date" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                    @error('po_date')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Product">Product: </label>
                    <select name="product_id" class="w-1/2 h-16 rounded-lg px-4 shadow-lg border-none" required>
                        <option value="Test" selected>Test</option>
                    </select>
                    @error('product_id')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Quantity">Quantity: </label>
                    <input type="number" name="quantity" min="1"
                        class="w-1/2 px-4 h-16 rounded-lg shadow-lg border-none" required>
                    @error('quantity')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
            <x-slot name="right_side">
                <div class="space-y-2 flex-col">
                    <label for="Purchase Number">Purchase Number: </label>
                    <input type="text" name="purchase_number" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                    @error('purchase_number')
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
