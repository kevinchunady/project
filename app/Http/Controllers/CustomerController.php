<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\CustomerType;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();

        return view('customers', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = CustomerType::all();
        $isUpdate = false;

        return view('insertion.customer', compact('types', 'isUpdate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $types = CustomerType::all();
        $isUpdate = true;

        return view('insertion.customer', compact('customer', 'types', 'isUpdate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->trade_name = $request->trade_name;
        $customer->outlet_name = $request->outlet_name;
        $customer->type_id = $request->customer_type;
        $customer->npwp = $request->customer_npwp;
        $customer->top = $request->customer_top;
        $customer->phone_number = $request->phone_number;
        $customer->address->street_name = $request->street_name;
        $customer->address->province = $request->province;
        $customer->address->city = $request->city;
        $customer->address->postal_code = $request->postal_code;

        $customer->save();
        return redirect('customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();
        return redirect('customers');
    }
}
