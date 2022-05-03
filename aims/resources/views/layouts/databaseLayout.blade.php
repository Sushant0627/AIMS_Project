<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <title>Database</title>

    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            Database
        </a>

        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('seed.index') }}">Seed Data</a></li>
            <li><a class="dropdown-item" href="{{ route('livestock.index') }}">Livestock Data</a></li>
            <li><a class="dropdown-item" href="{{ route('equipment.index') }}">Equipment Data</a></li>
            <li><a class="dropdown-item" href="{{ route('crop.index') }}">Crops Data</a></li>
            <li><a class="dropdown-item" href="{{ route('farmer.index') }}">Farmer Data</a></li>
            <li><a class="dropdown-item" href="empData">Employee Data</a></li>
        </ul>

    </div>
</head>
<body>
    <div class="container">

        @if(session()->has('success'))
            <div class="p-3 mb-2 bg-success text-white">
                {{ session('success') }}
            </div>
        @endif

        @if(session()->has('failed'))
            <div class="p-3 mb-2 bg-danger text-white">
                {{ session('failed') }}
            </div>
        @endif

        @yield('content')

        <div>
            <a href="{{ url()->previous() }}">Back</a>
            <a href="{{ route('dashboard') }}">Return To Dashboard</a>
        </div>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>
