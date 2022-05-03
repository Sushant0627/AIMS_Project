@extends('layouts/adminLayout')

@section('title', 'Admin Login')

@section('head')
    <nav class="navbar navbar-dark bg-dark shadow-sm p-3">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Agriculture Information Management System
        </a>
        </div>
    </nav>

@endsection

@section('content')

<div class="container border rounded mx-auto p-5 m-4">
    <div class="">
        <b>
            Sign In
        </b>
        <hr>
    </div>

    <div>
        <form action="Auth" method="POST">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="employeeID"> Employee ID: </label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="id" id="id" value="{{ old('id') }}" placeholder='Enter Your Employee ID' maxlength=7>
                </div>

                @error('id')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="passsword">Password: </label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" name="password" id="password" placeholder='Enter Your Password'>
                </div>

                @if (session()->has('status'))
                    <div class="text-danger">
                        {{ session('status') }}
                    </div>
                @endif

                @error('passphrase')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="forgot" style="text-align:center">
                <a href="{{ route('passreset') }}">Forgot Your Password?</a>
            </div>

            <div class="button">
                <button class="btn btn-outline-secondary" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>

@endsection
