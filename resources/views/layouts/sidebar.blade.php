<div class="flex flex-col justify-between h-screen w-1/5 text-black pt-8 border-gray-300 border-r-2">
    <div class="flex flex-col items-start justify-center">
        <div class="pl-10">
            <img src="{{ asset('images/avatar-dummy.png') }}" alt="Avatar Dummy" class="w-24 h-24 rounded-full">
        </div>
        <div class="mt-5 flex flex-col pl-10">
            <h1 class="font-semibold text-xl">Farion Wick</h1>
            <h2 class="font-normal text-sm">farionwick@gmail.com</h2>
        </div>
        <div class="mt-12 flex flex-col space-y-3 w-full">
            <a class="hover:bg-ccream transition-all duration-300 ease-in-out py-2" href="#">
                <button class="pl-10 flex flex-row items-center space-x-3 ">
                    <img src="{{ asset('images/report-logo.png') }}" alt="Report Logo" class="w-4 h-5">
                    <h2 class="font-normal text-base">Report</h2>
                </button>
            </a>
            <a class="hover:bg-ccream transition-all duration-300 ease-in-out py-2" href="#">
                <button class="pl-10 flex flex-row items-center space-x-3 ">
                    <img src="{{ asset('images/products-logo.png') }}" alt="Product Logo" class="w-4 h-5">
                    <h2 class="font-normal text-base">Product</h2>
                </button>
            </a>
            <a class="hover:bg-ccream transition-all duration-300 ease-in-out py-2" href="#">
                <button class="pl-10 flex flex-row items-center space-x-3 ">
                    <img src="{{ asset('images/customers-logo.png') }}" alt="Customers Logo" class="w-4 h-5">
                    <h2 class="font-normal text-base">Customers</h2>
                </button>
            </a>
            <a class="hover:bg-ccream transition-all duration-300 ease-in-out py-2" href="#">
                <button class="pl-10 flex flex-row items-center space-x-3 ">
                    <img src="{{ asset('images/users-logo.png') }}" alt="Users Logo" class="w-4 h-5">
                    <h2 class="font-normal text-base">Users</h2>
                </button>
            </a>
        </div>
    </div>
    <a href="#" class="mx-10 my-9">
        <button class="flex flex-row py-2 px-6 items-center bg-cred1 rounded-full space-x-2 hover:bg-cred2 transition-all duration-300 ease-in-out shadow-md shadow-red-400">
            <img src="{{ asset('images/logout-logo.png') }}" alt="Logout Icon" class="bg-white rounded-full px-1 py-1">
            <h2 class="text-white font-normal text-base">Log Out</h2>
        </button>
    </a>
</div>