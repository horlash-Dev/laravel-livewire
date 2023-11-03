<?php

namespace App\Livewire\Users;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ShowUser extends Component
{   #[Locked]
    public $name;
    public $email;
    #[Rule('required|min:8')]
    public $address;
    #[Rule('required|max:10')]
    public $phone;
    public $country;
    public $dob;
    public $gender;
    public $user;
    //#[Locked]
    public $countries = [];


    public function mount(User $user) {
        $this->user = $user;
        $this->name = $user->name;
        $this->dob = $user->dob;
        $this->address = $user->address;
        $this->email= $user->email;
        $this->country = $user->country;
        $this->gender = $user->gender;
        $this->phone = $user->phone;
    }

    function updated($name, $value)  {
        $this->validate();
        $this->user->update([$name => $value]);
        $this->dispatch('live-save', message: $name.'- has been updated!!');
    }

    public function render() : Object
    {   
      //$this->getCountries();
        return view('livewire.users.show-user');
    }

    public function getCountries() : array {

     return $this->countries =  [['name'=>'USA'],['name'=>'CANADA'],['name'=>'NIGERIA'],['name'=>'ICELAND'],];
    }


    function storeUser() : Object {
        Gate::authorize('can-access');
        $this->validate();
       $updt =  $this->only(['name','address','phone','country','dob','gender']);
       
        $this->user->update($updt);
        return redirect('/users');
    }
}
