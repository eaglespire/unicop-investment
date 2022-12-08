<?php


use App\Http\Livewire\Admin\CreateUserComponent;
use App\Http\Livewire\Admin\EditUserComponent;
use App\Http\Livewire\Admin\HomeComponent;
use App\Http\Livewire\Admin\ReadUsersComponent;


use App\Http\Livewire\Investment\AddUserToInvestmentPackage;
use App\Http\Livewire\Investment\CreateInvestmentPackage;
use App\Http\Livewire\Investment\EditInvestmentPackage;
use App\Http\Livewire\Investment\InvestmentPackages;


use App\Http\Livewire\Loan\LoanSubscribers;
use App\Http\Livewire\Loan\CreateLoanPackage;
use App\Http\Livewire\Loan\EditLoanPackage;
use App\Http\Livewire\Loan\EditUserLoan;
use App\Http\Livewire\Loan\GiveLoan;
use App\Http\Livewire\Loan\LoanPackages;
use App\Http\Livewire\Loan\UserLoans;
use App\Http\Livewire\Notifications\InboxComponent;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth','admin'])->group(function (){
    Route::get('dashboard', HomeComponent::class)->name('home');
    Route::get('users/new', CreateUserComponent::class)->name('create-new-user');
    Route::get('users/all', ReadUsersComponent::class)->name('read-users-component');
    Route::get('users/edit/{id}', EditUserComponent::class)->name('edit-user-component');
    Route::get('inbox', InboxComponent::class)->name('inbox-component');
    Route::get('loans', LoanPackages::class)->name('loan-categories-component');
    Route::get('loans/create', CreateLoanPackage::class)->name('create-loan-component');
    Route::get('loans/subscribers', LoanSubscribers::class)->name('loan-subscribers-component');
//    Route::get('loans/subscriber/{id}/edit', EditLoanSubsciberComponent::class)->name('edit-loan-subscriber-component');
    Route::get('loans/{_id}/edit',EditLoanPackage::class)->name('edit-loan-category-component');
    Route::get('loans/{_id}/offer',GiveLoan::class)->name('offer-loan-component');
    Route::get('user/{_id}/loans', UserLoans::class)->name('user-loan-component');
    Route::get('user/{_uid}/loan/{_lid}', EditUserLoan::class)->name('edit-single-user-loan-component');

    Route::prefix('investments')->group(function (){
        Route::get('packages/create', CreateInvestmentPackage::class)->name('create-investment-package');
        Route::get('packages',InvestmentPackages::class)->name('investment-packages');
        Route::get('packages/{_id}/edit', EditInvestmentPackage::class)->name('investment-package');

        Route::get('user/{_id}/add', AddUserToInvestmentPackage::class)->name('add-user-to-investment-package');
    });
});




