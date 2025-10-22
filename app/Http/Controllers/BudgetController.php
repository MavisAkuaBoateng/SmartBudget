<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BudgetItem;

class BudgetController extends Controller
{
    // Show all budget items
    public function index()
    {
        $budgetItems = BudgetItem::all();
        return view('budget.index', compact('budgetItems'));
    }

    // Show form to create a new budget item
    public function create()
    {
        return view('budget.create');
    }

    // Store a new budget item
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        BudgetItem::create([
            'name' => $request->name,
            'amount' => $request->amount,
        ]);

        return redirect()->route('budget.index')->with('success', 'Budget item added!');
    }

    // Show form to edit an existing budget item
    public function edit(BudgetItem $budgetItem)
    {
        return view('budget.edit', compact('budgetItem'));
    }

    // Update an existing budget item
    public function update(Request $request, BudgetItem $budgetItem)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
        ]);

        $budgetItem->update([
            'name' => $request->name,
            'amount' => $request->amount,
        ]);

        return redirect()->route('budget.index')->with('success', 'Budget item updated!');
    }

    // Delete a budget item
    public function destroy(BudgetItem $budgetItem)
    {
        $budgetItem->delete();
        return redirect()->route('budget.index')->with('success', 'Budget item deleted!');
    }
}
