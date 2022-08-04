<?php

namespace App\Http\Livewire;

use App\Models\CollegeDetails;
use App\Models\Comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MoreDetails extends Component
{
    public $college_id ,$comment;

    public function mount($college_id){
          $this->college_id = $college_id;
          $count  = DB::table('comments')->where('id',$college_id)->where('comment','like','%'.'good'.'%')->orWhere('comment','like','%'.'ok'.'%')->orWhere('comment','like','%'.'best'.'%')->orWhere('comment','like','%'.'superb'.'%')->orWhere('comment','like','%'.'outsanding'.'%')->count();
          $total  = DB::table('comments')->count();
         if($total==0){
            $total=1;
           
         }
         dd("gielllllo");
         $this->rating = ($count/$total)*100;
        }
        
    public function save()
    {
        
        Auth::user()->comment()->create([
            'comment'=>$this->comment,
            'college_details_id'=>$this->college_id,
            ]);
        }
    
    
    public function render()
    {
        // $collegeDetails = CollegeDetails::find($this->college_id);
        $details = CollegeDetails::where('id',$this->college_id)->get();
        $comments  = Comments::where('college_details_id',$this->college_id)->get();

        // dd($comments);
        return view('livewire.more-details',["details"=>$details,"comments"=>$comments]);
    }
}
