@extends('layouts.app')

@section('content')
    @include('layouts.header', ['link' => 'add-customer', 'string' => 'Add Customer'])

    <x-table>
        <x-slot name="header">
            <tr>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Customer ID</th>
                <th class="py-2 px-20 items-center border border-r-black border-t-0 border-l-0 border-b-0">Customer Name</th>
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
            <tr>
                <td class="py-6">C0001</td>
                <td class="uppercase">PT. Hero Supermarket</td>
                <td>08.178.554.2-123.321</td>
                <td class="text-start">Jalan Puncak No. 5</td>
                <td>081234567890</td>
                <td>Distributor</td>
                <td>7 <span class="text-cgray">day(s)</span></td>
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
            <tr class="bg-clightblue2">
                <td class="py-6">C0001</td>
                <td class="uppercase">PT. Hero Supermarket</td>
                <td>08.178.554.2-123.321</td>
                <td class="text-start">Jalan Puncak No. 5</td>
                <td>081234567890</td>
                <td>Distributor</td>
                <td>7 <span class="text-cgray">day(s)</span></td>
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
        </x-slot>
    </x-table>
@endsection
