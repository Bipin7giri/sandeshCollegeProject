<?php

namespace App\Http\Livewire;

use App\Models\CollegeDetails;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class CollegeList extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];
    public function render()
    {
        $count  = DB::table('comments')->where('comment','like','%'.'good'.'%')->orWhere('comment','like','%'.'ok'.'%')->orWhere('comment','like','%'.'best'.'%')->orWhere('comment','like','%'.'superb'.'%')->orWhere('comment','like','%'.'outsanding'.'%')->count();
        $total  = DB::table('comments')->count();
      
       
        $this->rating = ($count/$total)*100;

        $collegeDetails = CollegeDetails::when($this->search,function($q){
            return $q->where('college_name','like','%'.$this->search.'%')
            ->orwhere('address','like','%'.$this->search.'%');
        })->paginate(9);

        // $collegeDetails = CollegeDetails::all();
        return view('livewire.college-list',["collegeDetails"=>$collegeDetails]);
    }
}
