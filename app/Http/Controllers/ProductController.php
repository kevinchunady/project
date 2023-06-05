<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(ProductRequest $request) {

        $imagePath = $request->product_picture->store('products', 'public');

        Product::create([
            'name' => $request->product_name,
            'price' => $request->product_price,
            'picture' => $imagePath,
            'weight' => $request->product_weight
        ]);

        return redirect('products');
    }

    public function read() {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function update() {

    }

    public function delete() {

    }
}
