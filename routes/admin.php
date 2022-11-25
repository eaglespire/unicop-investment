<?php

use App\Http\Livewire\Admin\CreateUserComponent;
use App\Http\Livewire\Admin\HomeComponent;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', HomeComponent::class)->name('home');
Route::get('users/new', CreateUserComponent::class)->name('create-new-user');
