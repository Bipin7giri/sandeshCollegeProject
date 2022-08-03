<?php

namespace App\Http\Livewire;

use App\Models\FlightDetails;
use App\Models\TicketDetails;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BookTickets extends Component
{
    public $flight_id, $name, $firstname, $lastname, $phone_no, $middlename, $address, $email, $citizen_number,$card_name,$payment_type, $card_no;
    public function mount($flight_id)
    {
        $this->flight_id= $flight_id;
        $this->name=Auth::user();
    //   dd($this->name);
    }
      
    public function bookNow($id)
    {
      
        
        $this->validate([
            "firstname" => "required", 
            "lastname"=>"required",
            "phone_no"=>"required",
            "address"=>"required",
            "email"=>"required",
            "citizen_number"=>"required",
            "card_no"=>"required",
            "card_name"=>'required',
            "payment_type"=>'required'
            
        ]);
     
        // DistrictModel::find($this->district_id)->area()->create(
        //     ['name'=>$this->name]
        // )

        Auth::user()->ticket()->create([
        'firstname'=>$this->firstname,
        'middlename'=>$this->middlename,
        'lastname'=>$this->lastname,
        'phone_no'=>$this->phone_no,
        'flight_details_id'=>$this->flight_id,
        'address'=>$this->address,
        'citizen_number'=>$this->citizen_number,
        'email'=>$this->email,
        "card_no"=>$this->card_no,
        "card_name"=>$this->card_name,
        "payment_type"=>$this->payment_type
        ]);
        $book=FlightDetails::find($id)->decrement('seats');
        session()->flash('message', 'Ticket Booked  successfully Fly World  .');
        return redirect('/viewhistory');
           
    }
   
    

    public function render()
    {
        $flightDetails = FlightDetails::find($this->flight_id);
        return view('livewire.book-tickets',['flightDetails'=>$flightDetails,'name'=>$this->name]);
    }
}
