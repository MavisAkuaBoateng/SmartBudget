<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Budget Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('home') }}">SmartBudget</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" 
                       href="{{ route('home') }}">Home</a>
                </li>

                <!-- Budget Dashboard -->
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('budget.index') ? 'active' : '' }}" 
                       href="{{ route('budget.index') }}">Dashboard</a>
                </li>

                <!-- Budget Actions Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('budget.*') && !request()->routeIs('budget.index') ? 'active' : '' }}" 
                       href="#" id="budgetDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Budget Actions
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="budgetDropdown">
                        <li>
                            <a class="dropdown-item {{ request()->routeIs('budget.create') ? 'active' : '' }}" 
                               href="{{ route('budget.create') }}">Add Item</a>
                        </li>
                        @if(request()->routeIs('budget.edit'))
                        <li>
                            <a class="dropdown-item active" href="{{ url()->current() }}">Edit Item</a>
                        </li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-5">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @yield('content')
</div>

<footer class="bg-light py-4 mt-5">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} SmartBudget. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
