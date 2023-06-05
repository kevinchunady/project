@extends('layouts.insertion')

@section('back-button')
    <a href="#">
        @include('components.back-button')
    </a>
@endsection

@section('header-title')
    <h1 class="mt-8 font-semibold text-3xl">Accounting</h1>
@endsection

@section('form')
    <form action="#" method="POST" class="mt-14" id="myForm">
        @csrf
        <x-insertion-form>
            <x-slot name="left_side">
                <div class="space-y-2 flex flex-col">
                    <label for="Receipt Date:">Receipt Date: </label>
                    <input type="date" name="receipt_date" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                    @error('receipt_date')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Payment Method">Payment Method: </label>
                    <select name="payment_method" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                        <option value="placeholder" selected>Placeholder</option>
                    </select>
                    @error('payment_method')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
            <x-slot name="right_side">
                <div class="space-y-2 flex-col">
                    <label for="Receipt Amount">Receipt Amount: </label>
                    <input type="number" name="receipt_amount" min="1" class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" placeholder="Rp. " required>
                    @error('receipt_amount')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Payment Status">Payment Status: </label>
                    <select name="payment_status" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                        <option value="placeholder" selected>Placeholder</option>
                    </select>
                    @error('payment_status')
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