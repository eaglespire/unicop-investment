<?php

use App\Http\Livewire\User\HomeComponent;
use App\Http\Livewire\User\ProfileComponent;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')
    ->group(function (){
        Route::get('dashboard', HomeComponent::class)->name('home-component');
        Route::get('profile',ProfileComponent::class)->name('profile-component');
    });
