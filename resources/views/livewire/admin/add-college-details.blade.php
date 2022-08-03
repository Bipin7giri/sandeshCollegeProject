
<div>
    <!-- tailwind.config.js -->



<!-- component -->
<div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    
    <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
        <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
    
        <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
            <div class="flex items-center justify-center mt-8">
                <div class="flex items-center">
                    <svg class="h-12 w-12" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M364.61 390.213C304.625 450.196 207.37 450.196 147.386 390.213C117.394 360.22 102.398 320.911 102.398 281.6C102.398 242.291 117.394 202.981 147.386 172.989C147.386 230.4 153.6 281.6 230.4 307.2C230.4 256 256 102.4 294.4 76.7999C320 128 334.618 142.997 364.608 172.989C394.601 202.981 409.597 242.291 409.597 281.6C409.597 320.911 394.601 360.22 364.61 390.213Z" fill="#4C51BF" stroke="#4C51BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M201.694 387.105C231.686 417.098 280.312 417.098 310.305 387.105C325.301 372.109 332.8 352.456 332.8 332.8C332.8 313.144 325.301 293.491 310.305 278.495C295.309 263.498 288 256 275.2 230.4C256 243.2 243.201 320 243.201 345.6C201.694 345.6 179.2 332.8 179.2 332.8C179.2 352.456 186.698 372.109 201.694 387.105Z" fill="white"></path>
                    </svg>
                    
                    <span class="text-white text-2xl mx-2 font-semibold">Dashboard</span>
                </div>
            </div>
    
            <nav class="mt-10">
                <a class="flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-gray-100" href="{{route('addcollege')}}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
    
                    <span class="mx-3">Dashboard</span>
                </a>
    
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{route('userdetails')}}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z">
                        </path>
                    </svg>
    
                    <span class="mx-3">Users</span>
                </a>
    
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{route('feedbacklist')}}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                        </path>
                    </svg>
    
                    <span class="mx-3">FeedBack</span>
                </a>
    
                <a class="flex items-center mt-4 py-2 px-6 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{route('commentlist')}}">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                        </path>
                    </svg>
    
                    <span class="mx-3">Comment List</span>
                </a>
            </nav>
        </div>
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <main>
                    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1 flex justify-between">
                                <div class="px-4 sm:px-0">
                                    <h3
                                        class="text-lg font-medium text-gray-900"
                                    >
                                        Edu Nepal
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Add Details of your Colleges
                                    </p>
                                </div>
                            </div>

                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <div>
                                    <input
                                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                        type="hidden"
                                        wire:model="hiddenId"
                                    />

                                    <h3
                                        class="inline-block mb-2 text-3xl text-center font-serif font-medium text-red-900"
                                    >
                                        College Information
                                    </h3>
                                    <div class="bg-red-100 p-10">
                                        @if ($this->hiddenId)
                                        <h3
                                            class="inline-block mb-2 text-lg font-medium text-gray-900"
                                        >
                                            {{ $college_name }}
                                        </h3>
                                        @else
                                        <h3
                                            class="inline-block mb-2 text-lg font-medium text-gray-900"
                                        >
                                            Enter College Details
                                        </h3>
                                        @endif
                                        <div class="grid grid-cols-2 gap-5">
                                            <div class="w-full">
                                                <label
                                                    for=""
                                                    class="text-black font-bold px-1 block"
                                                    >College Name</label
                                                >
                                                <input
                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                    type="text"
                                                    placeholder="College Name"
                                                    wire:model="college_name"
                                                    name="flightName"
                                                />
                                                @error('college_name')
                                                <span class="text-rose-600">{{
                                                    $message
                                                }}</span>
                                                @enderror
                                            </div>
                                            <div class="w-full">
                                                <label
                                                    for=""
                                                    class="text-black font-bold px-1"
                                                    >Address</label
                                                >
                                                <input
                                                    name="Address"
                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                    type="text"
                                                    placeholder="Address"
                                                    wire:model="address"
                                                />
                                                @error('address')
                                                <span class="text-rose-600">{{
                                                    $message
                                                }}</span>
                                                @enderror
                                            </div>

                                            <div class="w-full">
                                                <label
                                                    for=""
                                                    class="text-black font-bold px-1"
                                                    >BBA Seats</label
                                                >
                                                <input
                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                    type=number"
                                                    placeholder="BBA Seats"
                                                    wire:model="seats_bba"
                                                />
                                            </div>

                                            <div class="w-full">
                                                <label
                                                    for=""
                                                    class="text-black font-bold px-1"
                                                    >BCA Seats</label
                                                >
                                                <input
                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                    type="number"
                                                    placeholder="BCA Seats"
                                                    wire:model="seats_bca"
                                                />
                                            </div>

                                            <div class="w-full">
                                                <label
                                                    for=""
                                                    class="text-black font-bold px-1"
                                                    >BBM Seats</label
                                                >
                                                <input
                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                    type="number"
                                                    placeholder="BBM Seats"
                                                    wire:model="seats_bbm"
                                                />
                                            </div>

                                            <div class="w-full">
                                                <label
                                                    for=""
                                                    class="text-black font-bold px-1"
                                                    >BIM Seats</label
                                                >
                                                <input
                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                    type="number"
                                                    placeholder="BIM Seats"
                                                    wire:model="seats_bim"
                                                />
                                            </div>
                                            <div class="w-full">
                                                <div class="flex justify-center">
                                                    <div class="mb-3 xl:w-96">
                                                      <label for="exampleFormControlTextarea1" class="text-black font-bold px-1"
                                                        >Description </label
                                                      >
                                                      <textarea
                                                        class="
                                                          form-control
                                                          block
                                                          w-full
                                                          px-3
                                                          py-1.5
                                                          text-base
                                                          font-normal
                                                          text-gray-700
                                                          bg-white bg-clip-padding
                                                          border border-solid border-gray-300
                                                          rounded
                                                          transition
                                                          ease-in-out
                                                          m-0
                                                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                                        "
                                                        id="exampleFormControlTextarea1"
                                                        rows="3"
                                                        placeholder="Your message"
                                                        wire:model="description"
                                                      ></textarea>
                                                    </div>
                                                  </div>
                                            </div>
                                        

                                        
                                            <div class="w-full">
                                                <label
                                                    for=""
                                                    class="text-black font-bold px-1"
                                                    >Choose College Image</label
                                                >
                                                <input
                                                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                                    type="file"
                                                    placeholder="Location"
                                                    wire:model="images"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <button
                                        type="button"
                                        wire:click="save()"
                                        class="w-full bg-green-600 p-3 text-white font-bold"
                                    >
                                        Add
                                    </button>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
             <div class="sm:px-6 w-full">
                        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                            <div class="mt-7 overflow-x-auto">
                                <table class="w-full whitespace-nowrap">
                                    <thead>
                                        <tr
                                            tabindex="0"
                                            class="focus:outline-none h-16 border border-gray-100 rounded"
                                        >
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        College Name
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        Address
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-right text-gray-700 mr-2"
                                                    >
                                                        Seats BBA
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        Seats BBM
                                                    </p>
                                                </div>
                                            </th>
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        Seats BIM
                                                    </p>
                                                </div>
                                            </th>
        
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        Seats BCA
                                                    </p>
                                                </div>
                                            </th>
        
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        Description
                                                    </p>
                                                </div>
                                            </th>
                                         
                                          
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        Image
                                                    </p>
                                                </div>
                                            </th>
        
                                            <th>
                                                <div class="flex items-center pl-5">
                                                    <p
                                                        class="text-base font-medium leading-none text-gray-700 mr-2"
                                                    >
                                                        Edit
                                                    </p>
                                                </div>
                                            </th>
                                        </tr>
        
                                        <tr></tr>
                                    </thead>
        
                                    @foreach ($collegeDetails as $collegDetail)
                                    <tbody>
                                        <tr
                                            tabindex="0"
                                            class="focus:outline-none h-16 border border-gray-100 rounded"
                                        >
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-sm leading-none text-gray-600 ml-2"
                                                    >
                                                        {{ $collegDetail->college_name }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-sm leading-none text-gray-600 ml-2"
                                                    >
                                                        {{ $collegDetail->address }}
                                                    </p>
                                                </div>
                                            </td>
        
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-sm leading-none text-gray-600 ml-2"
                                                    >
                                                        {{ $collegDetail->seats_bba }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-sm leading-none text-gray-600 ml-2"
                                                    >
                                                        {{ $collegDetail->seats_bbm }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-sm leading-none text-gray-600 ml-2"
                                                    >
                                                        {{ $collegDetail->seats_bim }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <p
                                                        class="text-sm leading-none text-gray-600 ml-2"
                                                    >
                                                        {{ $collegDetail->seats_bca }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="pl-4 ">
                                                <div class="flex items-center w-6/12">
                                                    <p
                                                        class="text-sm leading-none text-gray-600 ml-2 "
                                                    >
                                                        {{ $collegDetail->description }}
                                                    </p>
                                                </div>
                                            </td>
                                          
                                            <td class="pl-4">
                                                <div class="flex items-center">
                                                    <img
                                                        src="{{ asset('storage/' . $collegDetail->images) }}"
                                                        alt=""
                                                        class="object-scale-down h-48 w-96"
                                                        alt=""
                                                    />
                                                </div>
                                            </td>
        
                                            <td>
                                                <button
                                                    type="button"
                                                    class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out"
                                                    wire:click="editCollege({{ $collegDetail->id }})"
                                                >
                                                    Edit
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                                {{--
                                <div class="mt-10">{{$sportCenters->links()}}</div>
                                --}}
                            </div>
                          
                        </div>
                
        </div>
            </main>
    </div>
</div>



</div>
