<?php


use App\Http\Livewire\Admin\CreateUserComponent;
use App\Http\Livewire\Admin\EditUserComponent;
use App\Http\Livewire\Admin\HomeComponent;
use App\Http\Livewire\Admin\ReadUsersComponent;


use App\Http\Livewire\Investment\AddUserToInvestmentPackage;
use App\Http\Livewire\Investment\AllInvestments;
use App\Http\Livewire\Investment\CreateInvestmentPackage;
use App\Http\Livewire\Investment\EditInvestmentPackage;
use App\Http\Livewire\Investment\InvestmentPackages;


use App\Http\Livewire\Investment\SingleInvestmentPackage;
use App\Http\Livewire\Investment\SingleUserInvestments;
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

    Route::prefix('user')->group(function (){
        Route::get('{_id}/loans', UserLoans::class)->name('user-loan-component');
        Route::get('{_uid}/loan/{_lid}', EditUserLoan::class)->name('edit-single-user-loan-component');
        Route::get('{_id}/offer',GiveLoan::class)->name('offer-loan-component');
        Route::get('{_id}/investments', SingleUserInvestments::class)->name('single-user-investments');
        Route::get('{_id}/add', AddUserToInvestmentPackage::class)->name('add-user-to-investment-package');
    });

    Route::prefix('loans')->group(function (){
        Route::get('/', LoanPackages::class)->name('loan-categories-component');
        Route::get('create', CreateLoanPackage::class)->name('create-loan-component');
        Route::get('subscribers', LoanSubscribers::class)->name('loan-subscribers-component');
        Route::get('{_id}/edit',EditLoanPackage::class)->name('edit-loan-category-component');
    });

    Route::prefix('investments')->group(function (){
        Route::get('packages/create', CreateInvestmentPackage::class)->name('create-investment-package');
        Route::get('packages',InvestmentPackages::class)->name('investment-packages');
        Route::get('packages/{_id}/edit', EditInvestmentPackage::class)->name('investment-package');
        Route::get('/',AllInvestments::class)->name('all-investments');
        Route::get('packages/{_id}', SingleInvestmentPackage::class)->name('single-investment-package');

    });
});




