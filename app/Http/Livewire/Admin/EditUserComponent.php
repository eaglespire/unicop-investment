<?php

namespace App\Http\Livewire\Admin;

use App\Contracts\UsersContract;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUserComponent extends Component
{
    use WithFileUploads;
    public $userId;
    public $firstname,$photo,$lastname,$middlename,
        $phone,$street,$city,$state,$country,$postal,$password_text, $counter;

    protected $listeners = ['refreshComponent'=>'$refresh'];

    protected $rules = [
        'firstname'=>['required','string','max:255'],
        'middlename'=>['nullable','string','max:255'],
        'lastname'=>['required','string','max:255'],
        'password_text'=>['required','string','min:10','max:255'],
        'phone'=>['required','string','min:10','max:26'],
        'street'=>['nullable','string','max:255'],
        'city'=>['nullable','string','max:255'],
        'state'=>['nullable','string','max:255'],
        'country'=>['nullable','string','max:255'],
        'postal'=>['nullable','string','max:255','min:5'],
    ];

    public function mount($id, UsersContract $contract)
    {
        $this->userId = $id;
        $this->loadUserInfo($contract);
        $this->counter = 1;
    }
    public function loadUserInfo(UsersContract $contract)
    {
        $user = $contract::readUser($this->userId);
        $this->firstname = $user->firstname;
        $this->middlename = $user->middlename;
        $this->lastname = $user->lastname;
        $this->password_text = $user->password_text;
        $this->street = $user->street;
        $this->city = $user->city;
        $this->state = $user->state;
        $this->country = $user->country;
        $this->postal = $user->postal;
        $this->photo = $user->photo;
        $this->phone = $user->phone;
    }
    public function submit(UsersContract $contract)
    {
        $this->validate();
        $data = [
            'firstname'=>$this->firstname,
            'middlename'=>$this->middlename,
            'lastname'=>$this->lastname,
            'phone'=>$this->phone,
            'password_text'=>$this->password_text,
            'postal'=>$this->postal,
            'street'=>$this->street,
            'city'=>$this->city,
            'state'=>$this->state,
            'country'=>$this->country,
        ];
        $response = $contract::updateProfileInformation($this->userId,$data);
        if ($response)
        {
            session()->flash('success','Updated...');
        }else{
            session()->flash('error','Error...');
        }
        return back();
    }
    public function uploadImage(UsersContract $contract)
    {
        $this->validate([
            'photo'=>['nullable','mimes:png,jpg,PNG,JPG,svg,jpeg','max:1024'],
        ]);
        $response = $contract::savePhoto($this->userId,$this->photo);
        if ($response){
            session()->flash('success','Success...');
            $this->mount($this->userId,$contract);
            $this->render();
            $this->counter++;
        }else{
            session()->flash('error','Something went wrong');
        }
        return back();
    }

    public function cancel()
    {
        return redirect(route('admin.read-users-component'));
    }
    public function render()
    {
        return view('livewire.admin.edit-user-component')->layout('livewire.layouts.admin-layout');
    }
}
