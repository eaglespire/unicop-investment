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
    public $pageNumber = 1;
    public $users;
    public $hasMorePages;

    public $data;

    public $firstname,$email,$lastname,$password;

    protected $listeners = [
        'refreshComponent'=>'$refresh',
        'search-results'=>'getSearchResults',
        'no-search-results'=>'emptyPrevSearch'
    ];

    protected $rules = [
        'email'=>['required','email','unique:users','max:255'],
        'firstname'=>['required','string','max:255'],
        'lastname'=>['required','string','max:255'],
        'password'=>['required','string','min:8']
    ];

    public function getSearchResults($data)
    {
        $this->data = $data;
    }
    public function emptyPrevSearch()
    {
        $this->data = null;
    }

    public function mount()
    {
        $this->data = null;
        $this->users = new Collection();
        $this->loadUsers();
    }

    public function createNewUser()
    {
        $this->validate();
        $data = [
            'firstname'=>$this->firstname,
            'lastname'=>$this->lastname,
            'email'=>$this->email,
            'password'=>\Hash::make($this->password)
        ];
        $user = User::create($data);
        if ($user)
        {
            session()->flash('success','New user added');
            $this->dispatchBrowserEvent('close-modal');
        }else{
            session()->flash('error','An error has occurred');
        }
        return back();

    }
    public function loadUsers()
    {
        $results = User::where('is_admin',false)->paginate(6,['*'],'page',$this->pageNumber);
        $this->pageNumber++;
        $this->hasMorePages = $results->hasMorePages();
        $this->users->push(...$results->items());
    }
    public function render()
    {
        return view('livewire.admin.read-users-component')->layout('livewire.layouts.admin-layout');
    }
}
