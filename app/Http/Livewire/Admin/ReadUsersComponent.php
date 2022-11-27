<?php

namespace App\Http\Livewire\Admin;

use App\Contracts\UsersContract;
use Illuminate\Support\Collection;
use Livewire\Component;

class ReadUsersComponent extends Component
{
    public $users;
    public $pageNumber = 1;
    public $hasMorePages;

    public $user_id,$firstname,$email, $photo,$lastname,$middlename,
    $phone,$username,$street,$city,$state,$country,$postal,$password_text;

    protected $listeners = ['refreshComponent'=>'$refresh'];

    public function mount(UsersContract $contract)
    {
        $this->users = new Collection();
        $this->loadUsers($contract);
    }
    public function loadUsers(UsersContract $contract)
    {
        $users = $contract::loadUsers($this->pageNumber);
        $this->pageNumber += 1;
        $this->hasMorePages = $users->hasMorePages();
        $this->users->push(...$users->items());
    }
    public function deleteUser(UsersContract $contract,int $userId)
    {
        if ($contract::deleteUser($userId))
        {
            //remove it from the collection
            $this->users = $this->users->where('id','!=',$userId);
            session()->flash('success','User deleted...');
        }else{
            session()->flash('error','Error deleting...');
        }
        return back();
    }

    public function loadUser(UsersContract $contract, int $userId)
    {
        if (!empty($userId))
        {
            $user = $contract::readUser($userId);
            if ($user){
                $this->user_id = $user->id;
                $this->firstname = $user->firstname;
                $this->email = $user->email;
                $this->phone = $user->phone;
                $this->middlename = $user->middlename;
                $this->lastname = $user->lastname;
                $this->photo = $user->photo;
                $this->username = $user->username;
                $this->street = $user->street;
                $this->city = $user->city;
                $this->state = $user->state;
                $this->country = $user->country;
                $this->postal = $user->postal;
                $this->password_text = $user->password_text;
                //load up the modal
                $this->dispatchBrowserEvent('load-modal');
            }else{
                session()->flash('error','No user found');
            }
            return back();
        }
    }
    public function editUser(UsersContract $contract, int $userId)
    {
        if (!empty($userId))
        {
            //fetch the user to update
            $user = $contract::readUser($userId);
            if ($user)
            {
                $this->firstname = $user->firstname;
                $this->dispatchBrowserEvent('load-edit-modal');
            }else{
                session()->flash('error','User not found');
            }
            return back();
        }
    }


    public function render()
    {
        return view('livewire.admin.read-users-component')->layout('livewire.layouts.admin-layout');
    }
}
