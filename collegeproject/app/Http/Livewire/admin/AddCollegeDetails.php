<?php

namespace App\Http\Livewire\Admin;

use App\Models\CollegeDetails;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCollegeDetails extends Component
{
    use WithFileUploads;
    public $message, $college_name, $address, $seats_bca,$seats_bba,$seats_bbm, $seats_bim,$description, $images,  $hiddenId;

   
    public function save()
    {
        dd('hi');
        $this->validate([
            "college_name" => "required", 
            "address"=>"required",
            "description"=>"required",
            "images"=>"required",
        ]);
        // DistrictModel::find($this->district_id)->area()->create(
        //     ['name'=>$this->name]
        // );
        if(intval($this->hiddenId)>0){
            $collegeDetails = CollegeDetails::find($this->hiddenId);
        }else{
            $collegeDetails= new CollegeDetails();
        }
        $collegeDetails->college_name=$this->college_name;
        $collegeDetails->address=$this->address;
        $collegeDetails->seats_bca=$this->seats_bca;
        $collegeDetails->seats_bbm=$this->seats_bbm;
        $collegeDetails->seats_bim=$this->seats_bim;
        $collegeDetails->seats_bba=$this->seats_bba;
        $collegeDetails->description=$this->description;
        $collegeDetails->images=$this->images->store('images','public');
        $collegeDetails->save();
       

    }
    public function editCollege($id)
    {
        $singleData= CollegeDetails::find($id);
        $this->flight_name= $singleData->college_name;
        $this->flight_id= $singleData->address;
        $this->departure_date= $singleData->seats_bba;
        $this->arrival_time= $singleData->seats_bca;
        $this->arrival_date= $singleData->seats_bbm;
        $this->departure_time= $singleData->seats_bim;
        $this->to=$singleData->description;
        $this->images=$singleData->images;
        $this->hiddenId=$singleData->id;
    }
  
    public function addFlightDetails()
    {
        $this->college_name = "";
        $this->hiddenId = null;
        $this->address = "";
        $this->seats_bba = "";
        $this->seats_bca = "";
        $this->seats_bim = "";
        $this->seats_bbm = "";
        $this->description = "";
        $this->images = "";
    }



    public function render()
    {
        $collegeDetails = CollegeDetails::all();
        return view('livewire.admin.add-college-details',['flightDetails'=>$collegeDetails])->layout('layouts.dashboard');;
    }
}
