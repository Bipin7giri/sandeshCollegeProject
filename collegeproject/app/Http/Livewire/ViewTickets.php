<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use Livewire\Component;

class ViewTickets extends Component
{
   
    public function render()
    {
            $flightDetails = FlightDetails::all();
         
        return view('livewire.view-tickets',["flightDetails"=>$flightDetails]);
    }
}
