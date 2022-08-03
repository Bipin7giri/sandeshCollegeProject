<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comments;
use Livewire\Component;

class CommentList extends Component
{
    public function render()
    {
        $commentLists = Comments::all();
        return view('livewire.admin.comment-list',['commentLists'=>$commentLists]);
    }
}
