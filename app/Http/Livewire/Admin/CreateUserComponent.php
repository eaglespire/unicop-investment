<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CreateUserComponent extends Component
{
    public $firstname,$middlename,$lastname,$email,$password,
    $phone,$postal,$photo,$street,$city,$state,$country;

    protected $rules = [
        'firstname'=>['required','string','max:255'],
        'lastname'=>['required','string','max:255'],
        'email'=>['required','email','unique:users','max:255'],
        'password'=>['required','string','min:10','max:255'],
        'phone'=>['required','string','max:15'],
        'photo'=>['nullable','image','mimes:png,jpg,PNG,JPG,svg,jpeg','max:1024'],
        'postal'=>['nullable','string','min:5','max:26'],
        'middlename'=>['nullable','string','max:255'],
        'street'=>['required','string','max:255'],
        'city'=>['required','string','max:255'],
        'state'=>['required','string','max:255'],
        'country'=>['required','string','max:255'],
    ];

    public function submit()
    {
        dd($this->firstname);
    }

    public function render()
    {
        return view('livewire.admin.create-user-component')->layout('livewire.layouts.admin-layout');
    }
}
