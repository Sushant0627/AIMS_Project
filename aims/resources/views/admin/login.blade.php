@extends('layouts/adminLayout')

@section('title', 'Admin Login')

@section('head')
    <div class="container-fluid head">
        <div class="container head-title">
            Agriculture Information Management System
        </div>
    </div>

@endsection

@section('content')

<div class="container wrapper">
    <div class="wrapper-text">
        <b>
            Sign In
        </b>
    </div>

    <form action="Auth" method="POST">
        @csrf
        <div>
            <label for="employeeID"> Employee ID: </label>
            <input class="input1" type="text" name="id" id="id" value="{{ old('Employee ID') }}" placeholder='Enter Your Employee ID' maxlength=7>

            @error('id')
                <div class="error-msg">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="passsword">Password: </label>
            <input class="input2" type="password" name="password" id="password" placeholder="Enter Your Password"><br>

            @if (session()->has('status'))
                {{ session('status') }}
            @endif

            @error('passphrase')
                <div class="error-msg">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="forgot">
            <a href="passReset">Forgot Your Password?</a>
        </div>

        <div class="button">
            <button type="submit">Login</button>
        </div>
    </form>
</div>

@endsection
