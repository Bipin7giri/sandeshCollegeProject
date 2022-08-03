<?php

namespace App\Http\Livewire;

use App\Models\FeedBack as ModelsFeedBack;
use Livewire\Component;

class FeedBack extends Component
{
    public $name, $email, $comment;

    public function save()
    {

    $this->validate([
        "name" => "required", 
        "email"=>"required",

        "comment"=>"required",
    ]);
  

    $comments= new ModelsFeedBack();
    $comments->name=$this->name;
    $comments->email=$this->email;
    $comments->comment=$this->comment;
    $comments->save();
   

}


    public function render()
    {
        return view('livewire.feed-back');
    }
}
