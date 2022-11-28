<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class UserStatusComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.user-status-component')->layout('livewire.layouts.admin-layout');
    }
}
