<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\CustomerType;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create() {
        $types = CustomerType::all();

        return view('insertion.add-customer', compact('types'));
    }

    public function store(CustomerRequest $request) {

        $customer = Customer::create([
            'trade_name' => $request->trade_name,
            'outlet_name' => $request->outlet_name,
            'npwp' => $request->customer_npwp,
            'type_id' => $request->customer_type,
            'top' => $request->customer_top,
            'phone_number' => $request->phone_number
        ]);

        CustomerAddress::create([
            'customer_id' => $customer->id,
            'street_name' => $request->street_name,
            'city' => $request->city,
            'province' => $request->province,
            'postal_code' => $request->postal_code,
        ]);

        return redirect('customers');
    }

    public function read() {
        $customers = Customer::all();

        return view('customers', compact('customers'));
    }

    public function update() {

    }

    public function delete() {
        
    }
}
