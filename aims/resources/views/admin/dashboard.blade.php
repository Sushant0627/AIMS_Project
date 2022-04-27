@extends('layouts/adminLayout')

@section('title', 'Dashboard')

@section('head')
    <nav class="navbar navbar-dark bg-dark shadow-sm p-4 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                AIMS - Dashboard
            </a>

        <div class="dropdown">
            <p class="text-primary">
                {{session('fname')}} {{session('lname')}}
            </p>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="" alt="" srcset="">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a href="logout">Logout</a></li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <div>
        <div>
            <a class="" href="{{ route('home') }}">View the Homepage</a>
        </div>

        <div>
            <a class="" href="{{ route('database') }}">View the database</a>
        </div>

        <div>
            <a class="" href="{{ route('asc.index') }}">Account Settings</a>
        </div>
    </div>
@endsection
