<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('Css/Style.css') }}">
</head>
<body class="bg-light">
     <!-- Navbar positioned at the top-left -->
     <nav>
        <a href="{{ route('home.index') }}" class="text-decoration-none">Home</a>
        <a href="{{ route('home.about') }}" class="text-decoration-none">About</a>
        <a href="{{ route('computers.index') }}" class="text-decoration-none">Computers</a>
        <a href="{{ route('computers.create') }}" class="text-decoration-none">Create</a>
        <a href="{{ route('home.contant') }}" class="text-decoration-none">Contact</a>
    </nav>
    @yield('contant')

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

