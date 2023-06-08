@extends('layouts.app')

@section('content')
    @include('layouts.header', ['link' => 'add-customer', 'string' => 'Add Customer'])

    <x-table>
        <x-slot name="header">
            <tr>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Customer ID</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Trader Name</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Outlet Name</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">NPWP</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Customer Address
                </th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Phone Number</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Customer Type</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">TOP</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Actions</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($customers as $customer)
                <tr>
                    <td class="py-6">{{ $customer->id }}</td>
                    <td class="uppercase">{{ $customer->trade_name }}</td>
                    <td class="uppercase">{{ $customer->outlet_name }}</td>
                    <td>{{ $customer->npwp }}</td>
                    <td class="text-start">{{ $customer->address->street_name }} {{ $customer->address->city }} {{ $customer->address->province }} {{ $customer->address->postal_code }}</td>
                    <td>{{ $customer->phone_number }}</td>
                    <td>{{ $customer->type->name }}</td>
                    <td>{{ $customer->top }} <span class="text-cgray">day(s)</span></td>
                    <td>
                        <div class="px-3 w-full flex flex-row items-center justify-center space-x-10">
                            <a href="#">
                                <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5">
                            </a>
                            <a href="#">
                                <img src="{{ asset('images/trash-logo.png') }}" alt="Trash Logo" class="w-5 h-5">
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-table>
@endsection
