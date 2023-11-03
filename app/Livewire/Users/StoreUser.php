<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Locked;
use Livewire\Component;
use App\Livewire\Forms\AddUser;
use Illuminate\Support\Facades\Gate;

class StoreUser extends Component
{

    public AddUser $form;
    
    #[Locked]
     public $countries = [];

    public function render()
    {   
        return view('livewire.users.store-user');
    }

    public function getCountries() : array {

        return $this->countries =  [['name'=>'USA'],['name'=>'CANADA'],['name'=>'NIGERIA'],['name'=>'ICELAND'],];
    }

    public function save()  {
        
        Gate::authorize('can-access');
            $val = $this->form->all();
            $this->form->SaveReg($val);
      
    }
}
