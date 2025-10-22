<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// Budget Routes
Route::get('/budget', [BudgetController::class, 'index'])->name('budget.index');
Route::get('/budget/create', [BudgetController::class, 'create'])->name('budget.create');
Route::post('/budget', [BudgetController::class, 'store'])->name('budget.store');
Route::get('/budget/{budgetItem}/edit', [BudgetController::class, 'edit'])->name('budget.edit');
Route::put('/budget/{budgetItem}', [BudgetController::class, 'update'])->name('budget.update');
Route::delete('/budget/{budgetItem}', [BudgetController::class, 'destroy'])->name('budget.destroy');
