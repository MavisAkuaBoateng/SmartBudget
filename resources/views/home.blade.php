@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
    <h1>Welcome to SmartBudget!</h1>
    <p class="lead">Track your expenses, manage your budget, and gain insights at a glance.</p>
    <a href="{{ route('budget.index') }}" class="btn btn-primary btn-lg mt-3">View Budget Dashboard</a>
</div>

@php
    // Dynamic totals
    $totalBudget = \App\Models\BudgetItem::sum('amount');
    $totalExpenses = 0; // Replace with Expenses::sum('amount') if you add Expenses table
    $remainingBudget = $totalBudget - $totalExpenses;
@endphp

<div class="row justify-content-center mb-5">
    <!-- Cards -->
    <div class="col-md-4 mb-3">
        <div class="card border-primary shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Total Budget</h5>
                <p class="card-text fs-3">${{ number_format($totalBudget, 2) }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card border-danger shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Total Expenses</h5>
                <p class="card-text fs-3">${{ number_format($totalExpenses, 2) }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card border-success shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Remaining Budget</h5>
                <p class="card-text fs-3">${{ number_format($remainingBudget, 2) }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Chart -->
<div class="row justify-content-center">
    <div class="col-md-8">
        <canvas id="budgetChart" height="200"></canvas>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('budgetChart').getContext('2d');
    const budgetChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Total Budget', 'Total Expenses', 'Remaining Budget'],
            datasets: [{
                label: 'Amount ($)',
                data: [{{ $totalBudget }}, {{ $totalExpenses }}, {{ $remainingBudget }}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(75, 192, 192, 0.7)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'SmartBudget Overview'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
