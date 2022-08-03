<?php

namespace App\Http\Livewire;

use App\Models\CollegeDetails;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $collegeDetails = CollegeDetails::all();
        return view('livewire.home',['collegeDetails'=>$collegeDetails]);
    }
}
