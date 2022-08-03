<?php

namespace App\Http\Livewire\Admin;

use App\Models\FeedBack;
use Livewire\Component;

class FeedBackList extends Component
{
    public function render()
    {
        $feedBacks= FeedBack::all();
        return view('livewire.admin.feed-back-list',["feedBacks"=>$feedBacks]);
    }
}
