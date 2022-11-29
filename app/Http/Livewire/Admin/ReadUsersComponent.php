<?php

namespace App\Http\Livewire\Admin;

use App\Contracts\UsersContract;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ReadUsersComponent extends Component
{
    use WithFileUploads, WithPagination;
    public $users;
    public $pageNumber = 1;
    public $hasMorePages;

    public $term;
    public $data;

    public $user_id,$firstname,$email, $photo,$lastname,$middlename,
    $phone,$username,$street,$city,$state,$country,$postal,$password_text;

    protected $listeners = [
        'refreshComponent'=>'$refresh',
        'search-results'=>'getSearchResults',
        'no-search-results'=>'emptyPrevSearch'
    ];

    public function getSearchResults($data)
    {
        $this->data = $data;
    }
    public function emptyPrevSearch()
    {
        $this->data = null;
    }

    public function mount(UsersContract $contract)
    {
        $this->users = new Collection();
        $this->loadUsers($contract);
        $this->data = null;
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
        return view('livewire.admin.read-users-component')->layout('livewire.layouts.admin-layout');
    }
}
