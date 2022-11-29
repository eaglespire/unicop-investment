<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;
    public $term;
    public function mount()
    {
        $this->term = "";
    }
    public function render()
    {
        sleep(1);
        $users = User::search($this->term)->paginate(20);
        if (!empty($users))
        {
            $this->emit('search-results',$users);
        }
        if ($this->term == "")
        {
            $this->emit('no-search-results');
        }
        //dd($users);

        return view('livewire.admin.search-component');
    }
}
