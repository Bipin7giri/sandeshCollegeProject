<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UsersList extends Component
{

    public function render()
    {
        $users = User::where('type','user')->get();
        //  = User::where('type','user')->short('datetime', 'desc')
        // ->limit(1);
        $latest=  DB::table('users')->where('type','user')->latest('created_at')->first();
        $count  = DB::table('users')->where('type','user')->count();
     
       
        return view('livewire.admin.users-list',['users'=>$users,'latest'=>$latest,'count'=>$count]);
    }
}
