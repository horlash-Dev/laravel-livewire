<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class AllUser extends Component
{
    public $alls = [];

    public function mount() {
        $this->alls = User::latest()->get();
    }

    public function render()
    {   
        return view('livewire.users.all-user');
    }

    function getAll() {
        $this->alls = User::latest()->get();
       // return User::latest()->get();
        
    }

    function editUser(User $user)  {
        return view('livewire.users.show-user', compact('user'));
    }


}
