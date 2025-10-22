@extends('layouts.app')

@section('content')
<h2 class="mb-4">Budget Dashboard</h2>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card text-bg-success">
            <div class="card-body">
                <h5 class="card-title">Total Budget Items</h5>
                <p class="card-text fs-4">{{ $budgetItems->count() }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-info">
            <div class="card-body">
                <h5 class="card-title">Total Amount</h5>
                <p class="card-text fs-4">
                    ${{ $budgetItems->sum('amount') }}
                </p>
            </div>
        </div>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>Amount ($)</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($budgetItems as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->category }}</td>
            <td>{{ $item->amount }}</td>
            <td>
                <a href="{{ route('budget.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('budget.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" 
                        onclick="return confirm('Are you sure you want to delete this item?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
