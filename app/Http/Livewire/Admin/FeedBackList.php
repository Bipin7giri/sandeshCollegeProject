<?php

namespace App\Http\Livewire\Admin;

use App\Models\FeedBack;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FeedBackList extends Component
{
    public function render()
    {
        $count  = DB::table('feed_back')->where('comment','like','%'.'good'.'%')->orWhere('comment','like','%'.'ok'.'%')->orWhere('comment','like','%'.'best'.'%')->orWhere('comment','like','%'.'superb'.'%')->orWhere('comment','like','%'.'outsanding'.'%')->count();
        $total  = DB::table('feed_back')->count();
    
        $this->rating = ($count/$total)*100;
        $feedBackLists = FeedBack::all();
        return view('livewire..admin.feed-back-list',["feedBackLists"=>$feedBackLists]);
    }
}
