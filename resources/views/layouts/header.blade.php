<div class="flex flex-row justify-between bg-clightblue py-5 px-10 w-full">
    <div class="flex flex-row space-x-4">
        <button class="bg-white py-2 px-3 rounded-lg border border-gray-300 hover:bg-cgray transition-all duration-300 ease-in-out">
            <img src="{{ asset('images/filter-logo.png') }}" alt="Filter Logo" class="w-3 h-3">
        </button>
        <div class="bg-white border border-gray-300 py-2 px-3 rounded-lg flex flex-row space-x-2 items-center w-80">
            <img src="{{ asset('images/search-logo.png') }}" alt="Search Logo" class="w-3 h-3">
            <form action="#" method="POST">
                @csrf
                <input type="text" name="search" class="border-0 focus:outline-none focus:ring-0 p-0" placeholder="Search...">
            </form>
        </div>
    </div>
    <div>
        @include('components.add-button', ['string' => $string])
    </div>
</div>