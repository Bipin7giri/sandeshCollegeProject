
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
          <main>
            <div class="pt-6 px-4">
                <div class="mt-4 w-full grid grid-cols-2 md:grid-cols-2 xl:grid-cols-2 gap-10">
                   <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                      <div class="flex items-center">
                         <div class="flex-shrink-0">
                            <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$latest->name}}</span>
                            <h3 class="text-base font-normal text-gray-500">Latest User</h3>
                         </div>
                         <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                            {{$latest->created_at}}
                           
                         </div>
                      </div>
                   </div>
                   <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                      <div class="flex items-center justify-center">
                         <div class="flex-shrink-0">
                            <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{$count}}</span>
                            <h3 class="text-base font-normal text-gray-500 text-left">Number of users</h3>
                         </div>
                       
                      </div>
                   </div>
                </div>
                <div class="grid grid-cols-1 2xl:grid-cols-1 xl:gap-4 my-4">
                   <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                      <div class="flex items-center justify-between mb-4">
                         <h3 class="text-xl font-bold leading-none text-gray-900">Latest Customers</h3>
                         <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                         View all
                         </a>
                      </div>
                      <div class="flow-root">
                         <ul role="list" class="divide-y divide-gray-200">
                        
                             @forelse($users as $user)
                             <li class="py-3 sm:py-4">
                                 <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0">
                                     <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="green">
                                         <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 100-2 1 1 0 000 2zm7-1a1 1 0 11-2 0 1 1 0 012 0zm-.464 5.535a1 1 0 10-1.415-1.414 3 3 0 01-4.242 0 1 1 0 00-1.415 1.414 5 5 0 007.072 0z" clip-rule="evenodd" />
                                       </svg>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                       <p class="text-sm font-medium text-gray-900 truncate">
                                          {{$user->name}}
                                       </p>
                                       <p class="text-sm text-gray-500 truncate">
                                          <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17727a767e7b57607e7973646372653974787a">{{$user->email}}</a>
                                       </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                       {{$user->created_at}}
                                    </div>
                                 </div>
                              </li>
                             @empty <h1>NO Result Found</h1>
                             @endforelse
                         </ul>
                      </div>
                   </div>
                  
                </div>
             </div>
          </main>  
         
    </div>
</div>
</div>

