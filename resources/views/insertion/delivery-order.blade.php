@extends('layouts.insertion')

@section('back-button')
    @include('components.back-button')
@endsection

@section('header-title')
    <h1 class="mt-8 font-semibold text-3xl">Delivery Order</h1>
@endsection

@section('form')
    <form action="#" method="POST" class="mt-14" id="myForm">
        @csrf
        <x-insertion-form>
            <x-slot name="left_side">
                <div class="space-y-2 flex flex-col">
                    <label for="Delivery Sent Date:">Delivery Sent Date: </label>
                    <input type="date" name="sent_date" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                    @error('sent_date')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Status Delivery">Status Delivery: </label>
                    <select name="status" class="w-full px-4 h-16 rounded-lg shadow-lg border-none" required>
                        <option value="placeholder">Placeholder</option>
                    </select>
                    @error('status')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
            <x-slot name="right_side">
                <div class="space-y-2 flex-col">
                    <label for="Delivery Received Date">Delivery Received Date: </label>
                    <input type="date" name="received_date"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" required>
                    @error('received_date')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="Delivery Price">Delivery Price: </label>
                    <input type="number" name="price" class="w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        min="1" placeholder="Rp. " required>
                    @error('price')
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
