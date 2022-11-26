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

    public $step = 1, $userId;

    public function mount()
    {
        $this->fill(['firstname'=>'', 'lastname'=>'',
            'email'=>'', 'password'=>'', 'postal'=>'',
            'phone'=>'', 'middlename'=>'', 'street'=>'',
            'city'=>'', 'state'=>'', 'country'=>'',
            'counter' => 1, 'userId' => null,'photo' => null
        ]);
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
            'phone'=>$this->phone,
        ];
        $response = $contract::createUser($data);
        if ($response)
        {
            session()->flash('success','New User Created');
            $this->reset(['firstname','middlename','lastname',
                'email','password','phone',
                ]);
            $this->step = 2;
            $this->userId = $response->id;
        }else{
            session()->flash('error','Something went wrong');
        }
        return back();
    }

    public function levelTwo(UsersContract $contract)
    {
        $this->validate([
            'photo'=>['nullable','image','mimes:png,jpg,PNG,JPG,svg,jpeg','max:1024'],
        ]);
        //dd($this->photo);
        $response = $contract::savePhoto($this->userId,$this->photo);
        if ($response){
            session()->flash('success','Success...');
            $this->reset(['photo']);
            $this->counter++;
            $this->step = 3;
        }else{
            session()->flash('error','Something went wrong');
        }
        return back();
    }
    public function levelThree(UsersContract $contract)
    {
        $this->validate([
            'postal'=>['nullable','string','min:5','max:26'],
            'street'=>['required','string','max:255'],
            'city'=>['required','string','max:255'],
            'state'=>['required','string','max:255'],
            'country'=>['required','string','max:255'],
        ]);
        $data = [
            'postal'=>$this->postal,
            'street'=>$this->street,
            'city'=>$this->city,
            'state'=>$this->state,
            'country'=>$this->country
        ];
        $response = $contract::updateUser($this->userId,$data);
        if ($response)
        {
            session()->flash('success','Success');
            $this->reset(['street','city','state','country','postal']);
            $this->step = 1;
        }else{
            session()->flash('error','An error has occurred');
        }
        return back();
    }

    public function prevStep()
    {
        $this->step = 2;
    }

    public function render()
    {
        return view('livewire.admin.create-user-component')->layout('livewire.layouts.admin-layout');
    }
}
