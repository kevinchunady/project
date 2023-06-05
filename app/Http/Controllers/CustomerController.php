<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(CustomerRequest $request) {
        Client::create([
            'name',
            'npwp',
            'type_id',
            'top',
            'phone',
        ]);
    }

    public function read() {
        return view('customers');
    }

    public function update() {

    }

    public function delete() {
        
    }
}
