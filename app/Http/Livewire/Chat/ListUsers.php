<?php

namespace App\Http\Livewire\Chat;

use App\Models\User;
use Livewire\Component;

class ListUsers extends Component
{
    public function render()
    {
        return view('livewire.chat.list-users',['users'=>User::where('id','!=',auth()->user()->id)->get()]);
    }
}
