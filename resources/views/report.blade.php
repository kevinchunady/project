@extends('layouts.app')

@section('content')
    @include('layouts.header', ['string' => 'Add Order'])
    <div class="overflow-x-scroll">
        <table class="w-full table-auto">
            {{-- THead --}}
            <thead class="bg-clightblue items-end text-cdarkblue text-xs font-semibold uppercase">
                <tr>
                    <th class="py-2 px-3 border border-r-black border-t-0 border-l-0 border-b-0"></th>
                    <th class="py-2 px-3 border border-r-black border-t-0 border-l-0 border-b-0"></th>
                    <th colspan="2" class="py-2 px-3 border border-r-black border-t-0 border-l-0 border-b-0">Entry</th>
                    <th colspan="3" class="py-2 px-3 border border-r-black border-t-0 border-l-0 border-b-0">Purchase Order</th>
                    <th colspan="5" class="py-2 px-3 border border-r-black border-t-0 border-l-0 border-b-0">Invoicing</th>
                    <th colspan="4" class="py-2 px-3 border border-r-black border-t-0 border-l-0 border-b-0">Delivery</th>
                    <th class="py-2 px-3 border border-r-black border-t-0 border-l-0 border-b-0"></th>
                </tr>
                <tr>
                    <th class="py-2 px-3 items-center border border-r-black border-t-0 border-l-0 border-b-0">ID</th>
                    <th class="py-2 px-3 items-center border border-r-black border-t-0 border-l-0 border-b-0">Kam</th>
                    <th class="py-2 px-3 items-center">Date</th>
                    <th class="py-2 px-3 items-center border border-r-black border-t-0 border-l-0 border-b-0">Time</th>
                    <th class="py-2 px-3 items-center">Items</th>
                    <th class="py-2 px-3 items-center">Purchase Number</th>
                    <th class="py-2 px-3 items-center border border-r-black border-t-0 border-l-0 border-b-0">PO Date</th>
                    <th class="py-2 px-3 items-center">Invoice Number</th>
                    <th class="py-2 px-3 items-center">Invoice File</th>
                    <th class="py-2 px-3 items-center">Invoice File</th>
                    <th class="py-2 px-3 items-center">Invoice Amount</th>
                    <th class="py-2 px-3 items-center border border-r-black border-t-0 border-l-0 border-b-0">TOP</th>
                    <th class="py-2 px-3 items-center">Delivery Sent Date</th>
                    <th class="py-2 px-3 items-center">Delivery Received Date</th>
                    <th class="py-2 px-3 items-center">Delivery Status</th>
                    <th class="py-2 px-3 items-center border border-r-black border-t-0 border-l-0 border-b-0">Delivery Price</th>
                    <th class="py-2 px-3 items-center border border-r-black border-t-0 border-l-0 border-b-0">Action</th>
                </tr>
            </thead>
            {{-- End of Thead --}}
            {{-- Start of TR --}}
            <tbody class="text-sm text-center">
                <tr>
                    <td class="py-4">0001</td>
                    <td>Ann Chulhane Wijaya</td>
                    <td>16-Mar-23</td>
                    <td>17:30</td>
                    <td><img src="{{ asset('images/items-table-logo.png') }}" alt="Items Table Logo" class="w-3 h-4 mx-auto"></td>
                    <td>CANDY/12/2022/2368</td>
                    <td>15/03/2023</td>
                    <td>SM-0363/MAR/23</td>
                    <td><img src="{{ asset('images/file-logo.png') }}" alt="File Logo" class="w-3 h-4 mx-auto"></td>
                    <td>21-Mar-23</td>
                    <td>Rp 238.161.600</td>
                    <td>7 <span class="text-gray-300">DAY(S)</span></td>
                    <td>22-Mar-23</td>
                    <td>27-Mar-23</td>
                    <td>Success</td>
                    <td>Rp 50.000</td>
                    <td>
                        <a href="#">
                            <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5 mx-auto">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="py-4">0001</td>
                    <td>Ann Chulhane Wijaya</td>
                    <td>16-Mar-23</td>
                    <td>17:30</td>
                    <td><img src="{{ asset('images/items-table-logo.png') }}" alt="Items Table Logo" class="w-3 h-4 mx-auto"></td>
                    <td>CANDY/12/2022/2368</td>
                    <td>15/03/2023</td>
                    <td>SM-0363/MAR/23</td>
                    <td><img src="{{ asset('images/file-logo.png') }}" alt="File Logo" class="w-3 h-4 mx-auto"></td>
                    <td>21-Mar-23</td>
                    <td>Rp 238.161.600</td>
                    <td>7 <span class="text-gray-300">DAY(S)</span></td>
                    <td>
                        <a href="#">
                            <img src="{{ asset('images/edit-logo.png') }}" alt="Edit Logo" class="w-5 h-5 mx-auto">
                        </a>
                    </td>
                </tr>
            </tbody>
            {{-- End of TR --}}
        </table>
    </div>
@endsection
