<?php

use App\Http\Livewire\Admin\CreateUserComponent;
use App\Http\Livewire\Admin\EditUserComponent;
use App\Http\Livewire\Admin\HomeComponent;
use App\Http\Livewire\Admin\ReadUsersComponent;
use App\Http\Livewire\Admin\UserStatusComponent;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','admin'])->group(function (){
    Route::get('dashboard', HomeComponent::class)->name('home');
    Route::get('users/new', CreateUserComponent::class)->name('create-new-user');
    Route::get('users/all', ReadUsersComponent::class)->name('read-users-component');
    Route::get('users/edit/{id}', EditUserComponent::class)->name('edit-user-component');
    Route::get('users/status', UserStatusComponent::class)->name('user-status-component');
});




