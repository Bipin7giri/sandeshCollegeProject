<div>

    <section class=" py-5">
        <div class="flex justify-center">
            <div class="mb-1 xl:w-96">
                <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                    <input type="search"
                        class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Search Flight" aria-label="Search" aria-describedby="button-addon2">
                </div>
            </div>
        </div>
        <table class="min-w-full hidden lg:block text-center rounded-xl drop-shadow-lg">
            <thead class="border-b bg-gray-800">
                <tr>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Flight</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">From</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">To</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Deprature Time</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Arrival Time</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Deprature Date</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Arrival Date</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Seats</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Price</th>
                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">Action</th>
                </tr>
            </thead class="border-b">

            @foreach ($flightDetails as $flightDetail)
                <tr class="bg-white border-b">
                    <td class="text-md text-yellow-900 font-serif font-bold px-6 py-4 whitespace-nowrap">
                        {{ $flightDetail->flight_name }}</td>
                    <td class="text-md text-gray-900  px-6 py-4 font-bold whitespace-nowrap">{{ $flightDetail->from }}
                    </td>
                    <td class="text-md text-gray-900 font-bold px-6 py-4 whitespace-nowrap">{{ $flightDetail->to }}
                    </td>
                    <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                        {{ $flightDetail->departure_time }}</td>
                    <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                        {{ $flightDetail->arrival_time }}</td>
                    <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                        {{ $flightDetail->departure_date }}</td>
                    <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                        {{ $flightDetail->arrival_date }}</td>
                    <td class="text-md text-gray-900  px-6 py-4 font-bold whitespace-nowrap">
                        {{ $flightDetail->seats }}</td>
                    <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">Rs.
                        {{ $flightDetail->price }}</td>
                    <td class="text-md text-gray-900 font-md px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('booktickets', $flightDetail->id) }}"
                            :active="request() - > routeIS('booktickets')"
                            class="font-bold text-red-900   px-10  mb-4 cursor-pointer">Book Ticket
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-4 mx-3 inline" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </td>

                </tr>
            @endforeach

        </table>

    </section>


    <div class="lg:hidden border-b-8  border-red-500">
        @foreach ($flightDetails as $flightDetail)
            <div class="px-5 border-b-8  border-red-500">

                <div class="grid grid-cols-2 gap-5 py-5">
                    <div>
                        <Span class="text-red-900 font-bold"> Name:</Span> {{ $flightDetail->flight_name }}

                    </div>

                    <div>
                        <Span class="text-red-900 font-bold"> Seats:</Span> {{ $flightDetail->seats }}

                    </div>

                    <div>
                        <Span class="text-red-900 font-bold"> From:</Span> {{ $flightDetail->from }}

                    </div>
                    <div>
                        <Span class="text-red-900 font-bold"> To:</Span> {{ $flightDetail->to }}
                        <a href="{{ route('booktickets', $flightDetail->id) }}"
                            :active="request() - > routeIS('booktickets')"
                            class="font-bold text-red-900  block cursor-pointer">Book Ticket
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 my-4 mx-3 inline" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        @endforeach

    </div>

</div>
