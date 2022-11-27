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


    public function render()
    {
        return view('livewire.admin.read-users-component')->layout('livewire.layouts.admin-layout');
    }
}
