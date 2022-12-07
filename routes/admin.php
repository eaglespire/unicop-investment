<?php

use App\Http\Livewire\Admin\CreateLoanComponent;
use App\Http\Livewire\Admin\CreateUserComponent;
use App\Http\Livewire\Admin\EditLoanCategoryComponent;
use App\Http\Livewire\Admin\EditLoanSubsciberComponent;
use App\Http\Livewire\Admin\EditSingleUserLoanComponent;
use App\Http\Livewire\Admin\EditUserComponent;
use App\Http\Livewire\Admin\HomeComponent;
use App\Http\Livewire\Admin\LoanCategoriesComponent;
use App\Http\Livewire\Admin\LoanSubscribersComponent;
use App\Http\Livewire\Admin\OfferLoanComponent;
use App\Http\Livewire\Admin\ReadUsersComponent;

use App\Http\Livewire\Admin\UserLoanComponent;
use App\Http\Livewire\Notifications\InboxComponent;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','admin'])->group(function (){
    Route::get('dashboard', HomeComponent::class)->name('home');
    Route::get('users/new', CreateUserComponent::class)->name('create-new-user');
    Route::get('users/all', ReadUsersComponent::class)->name('read-users-component');
    Route::get('users/edit/{id}', EditUserComponent::class)->name('edit-user-component');
    Route::get('inbox', InboxComponent::class)->name('inbox-component');
    Route::get('loans', LoanCategoriesComponent::class)->name('loan-categories-component');
    Route::get('loans/create', CreateLoanComponent::class)->name('create-loan-component');
    Route::get('loans/subscribers', LoanSubscribersComponent::class)->name('loan-subscribers-component');
    Route::get('loans/subscriber/{id}/edit', EditLoanSubsciberComponent::class)->name('edit-loan-subscriber-component');
    Route::get('loans/{_id}/edit',EditLoanCategoryComponent::class)->name('edit-loan-category-component');
    Route::get('loans/{_id}/offer',OfferLoanComponent::class)->name('offer-loan-component');
    Route::get('user/{_id}/loans', UserLoanComponent::class)->name('user-loan-component');
    Route::get('user/{_uid}/loan/{_lid}', EditSingleUserLoanComponent::class)->name('edit-single-user-loan-component');


});




