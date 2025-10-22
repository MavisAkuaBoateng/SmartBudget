@extends('layouts.app')

@section('content')
<h2 class="mb-4">Add New Budget Item</h2>

<div class="card shadow-sm">
    <div class="card-body">
        <form action="{{ route('budget.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Amount ($)</label>
                <input type="number" name="amount" class="form-control" required min="0">
            </div>
            <button type="submit" class="btn btn-primary">Add Item</button>
        </form>
    </div>
</div>
@endsection
