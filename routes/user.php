<?php

use App\Http\Livewire\User\HomeComponent;
use App\Http\Livewire\User\ProfileComponent;
use App\Http\Livewire\User\UserLoanComponent;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')
    ->group(function (){
        Route::get('dashboard', HomeComponent::class)->name('home-component');
        Route::get('profile',\App\Http\Livewire\User\UserProfileComponent::class)->name('profile-component');
        Route::get('loans',\App\Http\Livewire\Loan\UserLoansFrontPage::class)->name('user-loan-component');

    });
