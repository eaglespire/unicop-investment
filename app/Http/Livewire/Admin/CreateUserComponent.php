<?php

namespace App\Http\Livewire\Admin;

use App\Contracts\UsersContract;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateUserComponent extends Component
{
    use WithFileUploads;
    public $firstname,$middlename,$lastname,$email,$password,
    $phone,$postal,$photo,$street,$city,$state,$country,$counter;

    public $step = 1;
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

    public function mount()
    {
        $this->fill([
            'firstname'=>'',
            'lastname'=>'',
            'email'=>'',
            'password'=>'',
            'postal'=>'',
            'phone'=>'',
            'middlename'=>'',
            'street'=>'',
            'city'=>'',
            'state'=>'',
            'country'=>'',
            'counter' => 1
        ]);
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function levelOne(UsersContract $contract)
    {
        $this->validate([
            'firstname'=>['required','string','max:255'],
            'lastname'=>['required','string','max:255'],
            'middlename'=>['nullable','string','max:255'],
            'email'=>['required','email','unique:users','max:255'],
            'password'=>['required','string','min:10','max:255'],
            'phone'=>['required','string','max:15'],
        ]);
        $data = [
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'middlename'=>$this->middlename,
            'email'=>$this->email,
            'password'=>$this->password,
//            'street'=>$this->street,
//            'city'=>$this->city,
//            'state'=>$this->state,
//            'country'=>$this->country,
//            'postal'=>$this->postal,
            'phone'=>$this->phone,
//            'photo'=>$this->photo
        ];
        $response = $contract::createUser($data);
        if ($response)
        {
            session()->flash('success','New User Created');
            $this->reset([
                'firstname',
                'middlename',
                'lastname',
                'email',
                'password',
                'phone',
                'photo',
                'street',
                'country',
                'city',
                'state',
                'postal'
                ]);
            $this->counter ++;
            $this->step = 2;
        }else{
            session()->flash('error','Something went wrong');
        }
        return back();
    }

    public function render()
    {
        return view('livewire.admin.create-user-component')->layout('livewire.layouts.admin-layout');
    }
}
