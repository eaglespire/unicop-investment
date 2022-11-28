<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class AdminLayout extends Component
{
    public $term = "";

    public function search()
    {
        dd($this->term);
    }
    public function render()
    {
        return view('livewire.layouts.admin-layout');
    }
}
