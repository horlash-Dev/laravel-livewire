<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Form;
use App\Models\User;
class AddUser extends Form
{   
    protected User $user;

    #[Rule('required|min:8|string')]
    public $name;

    #[Rule('required|email|string')]
    public $email;
    #[Rule('required|min:8|string')]
    public $address;
    #[Rule('required|max:10')]
    public $phone;
    #[Rule('required|string')]
    public $country;
    #[Rule('required|string')]
    public $dob;
    #[Rule('required|string')]
    public $gender;
    #[Rule('required|min:8|max:12|confirmed|string')]
    public $password;
   public $password_confirmation;


    public function SaveReg($val)  {
        $valid = $this->validate($val);
//        dd($valid);
        $valid['password'] =  Hash::make($valid['password']);
        User::create($valid);

        return redirect('/users');
    }

}
