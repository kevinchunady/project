@extends('layouts.insertion')

@section('back-button')
    @include('components.back-button')
@endsection

@section('header-title')
    <h1 class="mt-8 font-semibold text-3xl">Sales Order</h1>
@endsection

@section('form')
    <form action="#" method="POST" class="mt-14" id="myForm" enctype="multipart/form-data">
        @csrf
        <x-insertion-form>
            <x-slot name="left_side">
                <div class="space-y-2 flex flex-col">
                    <label for="Invoice Number">Invoice Number </label>
                    <input type="text" name="invoice_number" class="w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        required>
                    @error('invoice_number')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Invoice Date">Invoice Date: </label>
                    <input type="date" name="invoice_date" class="w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        required>
                    @error('invoice_date')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
            <x-slot name="right_side">
                <div class="space-y-2 flex-col">
                    <label for="Invoice File">Invoice File: </label>
                    <input type="file" name="invoice_file" class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5"
                        required>
                    @error('invoice_file')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="Invoice Amount">Invoice Amount: </label>
                    <input type="number" name="invoice_amount" class="w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        min="1" placeholder="Rp. " required>
                    @error('invoice_amount')
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
