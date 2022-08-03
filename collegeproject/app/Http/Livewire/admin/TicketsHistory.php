<?php

namespace App\Http\Livewire\Admin;

use App\Models\TicketDetails;
use Livewire\Component;

class TicketsHistory extends Component
{
    public function render()
    {
        $history= TicketDetails::all();
        // dd($ticketHistory);
        return view('livewire.admin.tickets-history',['history'=>$history]);
    }
}
