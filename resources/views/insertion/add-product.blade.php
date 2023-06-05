@extends('layouts.insertion')

@section('back-button')
    @include('components.back-button')
@endsection

@section('header-title')
    <h1 class="mt-8 font-semibold text-3xl">Add Product</h1>
@endsection

@section('form')
    <form action="#" method="POST" class="mt-14" id="myForm" enctype="multipart/form-data">
        @csrf
        <x-insertion-form>
            <x-slot name="left_side">
                <div class="space-y-2 flex flex-col">
                    <label for="Product Name:">Product Name: </label>
                    <input type="text" name="product_name" class="w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        required>
                    @error('product_name')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex flex-col">
                    <label for="Product Price">Product Price: </label>
                    <input type="number" name="product_price" class="w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        min="1" placeholder="Rp. " required>
                    @error('product_price')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
            </x-slot>
            <x-slot name="right_side">
                <div class="space-y-2 flex-col">
                    <label for="Product Picture">Product Picture: </label>
                    <input type="file" name="product_picture"
                        class="w-full px-4 h-16 rounded-lg shadow-lg border-none py-5" required>
                    @error('product_picture')
                        @include('components.form-error-message', ['message' => $message])
                    @enderror
                </div>
                <div class="space-y-2 flex-col">
                    <label for="Product Weight">Product Weight: </label>
                    <input type="number" name="product_weight" class="w-full px-4 h-16 rounded-lg shadow-lg border-none"
                        min="1" placeholder="in kg" required>
                    @error('product_weight')
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
