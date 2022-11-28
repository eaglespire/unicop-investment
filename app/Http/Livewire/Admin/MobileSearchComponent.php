<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class MobileSearchComponent extends Component
{
    public $term;
    public function mount()
    {
        $this->term = '';
    }
    public function search()
    {
        sleep(2);
        $users = User::search($this->term)->paginate(20);
        if (!empty($users))
        {
            $this->emit('search-results',$users);
        }else{
            $this->emit('no-search-results');
        }
    }
    public function render()
    {
        return view('livewire.admin.mobile-search-component');
    }
}
