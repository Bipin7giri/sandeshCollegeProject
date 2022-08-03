<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use App\Models\TicketDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class History extends Component
{
    public $userTicketHistory, $FlightDetails, $history,$message;
    
    public function mount()
    {
       $this->history= Auth::user()->ticket()->select('flight_details_id')->get();
    
       $this->userTicketHistory=Auth::user()->ticket()->get();
        //  dd($this->history);
    }
    public function render()
    {
    
       $flightNames=FlightDetails::find($this->history);
    //   dd($flightNames);
        return view('livewire.history',['userTicketHistory'=>$this->userTicketHistory,'flightNames' =>$flightNames]);
    }
}
