@extends('layouts.app')

@section('content')
<h2 class="mb-4">Edit Budget Item</h2>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('budget.update', $budgetItem->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $budgetItem->name }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" value="{{ $budgetItem->category }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Amount ($)</label>
                <input type="number" name="amount" class="form-control" value="{{ $budgetItem->amount }}" required min="0">
            </div>
            <button type="submit" class="btn btn-success">Update Item</button>
        </form>
    </div>
</div>
@endsection
