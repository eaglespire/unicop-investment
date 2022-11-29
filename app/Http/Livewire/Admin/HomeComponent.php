<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class HomeComponent extends Component
{
    public $data;

    protected $listeners = [
        'search-results'=>'getSearchResults',
        'no-search-results'=>'emptyPrevSearch'
    ];

    public function mount()
    {
        $this->data = null;
    }

    public function getSearchResults($data)
    {
        $this->data = $data;
    }
    public function emptyPrevSearch()
    {
        $this->data = null;
        $this->mount();
        $this->render();
    }

    public function render()
    {
        return view('livewire.admin.home-component')->layout('livewire.layouts.admin-layout');
    }
}
