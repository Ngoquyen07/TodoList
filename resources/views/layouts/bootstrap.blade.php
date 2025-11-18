<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <title>To Do List</title>

    @yield('styles')

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>

{{-- Header Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 py-2">
    <a class="navbar-brand fw-bold" href="{{ route('jobs.index') }}">
        ToDo App
    </a>

    <div class="ms-auto d-flex align-items-center gap-2">

        {{-- Dashboard Button --}}
        <a href="{{ route('dashboard') }}" class="btn btn-light btn-sm">
            <i class="bi bi-house-door"></i> Dashboard
        </a>

        {{-- Logout Button --}}
        <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button class="btn btn-danger btn-sm">
                <i class="bi bi-box-arrow-right"></i> Logout
            </button>
        </form>

    </div>
</nav>


<div class="main-content p-4">
    @yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
