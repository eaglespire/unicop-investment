<?php

namespace App\Http\Livewire\Admin;

use App\Contracts\UsersContract;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ReadUsersComponent extends Component
{
    use WithFileUploads, WithPagination;
    //public $users;
    public $pageNumber = 1;
    public $hasMorePages;

    public $term = "";
    public $banDate = "2022-12-03";

    public $user_id,$firstname,$email, $photo,$lastname,$middlename,
    $phone,$username,$street,$city,$state,$country,$postal,$password_text;

    protected $listeners = [
        'refreshComponent'=>'$refresh',
    ];

    public function banUser(int $userId)
    {
        sleep(1);
        $user = User::where('id',$userId)->first();
        $user->update([
            'banned_until'=>now()
        ]);
        session()->flash('success','User suspended...');
    }
    public function activateUser(int $userId)
    {
        sleep(1);
        $user = User::where('id',$userId)->first();
        $user->update([
            'banned_until'=>null
        ]);
        session()->flash('success','User unbanned...');
    }

    public function updatingTerm()
    {
        $this->resetPage();
    }

    public function deleteUser(UsersContract $contract,int $userId)
    {
        sleep(2);
        if ($contract::deleteUser($userId))
        {
            //refresh the page
            $this->emit('refreshComponent');
            session()->flash('success','User deleted...');
        }else{
            session()->flash('error','Error deleting...');
        }
        return back();
    }

    public function getVariables(UsersContract $contract, int $userId)
    {
        $user = $contract::readUser($userId);
        if ($user)
        {
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
        }
    }

    public function loadUser(UsersContract $contract, int $userId)
    {
        if (!empty($userId))
        {
            $this->getVariables($contract,$userId);
            //load up the modal
            $this->dispatchBrowserEvent('load-modal');
        }else{
            session()->flash('error','No user found');
        }
        return back();
    }

    public function cancelModalBtn()
    {
        $this->dispatchBrowserEvent('close-edit-modal');
    }


    public function render()
    {
        //sleep(1);

        return view('livewire.admin.read-users-component',[
            'users' => User::where('is_admin',false)
                ->latest()->search($this->term)->paginate(8)
        ])
            ->layout('livewire.layouts.admin-layout');
    }
}
