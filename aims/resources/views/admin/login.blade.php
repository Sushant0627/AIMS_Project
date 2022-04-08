@extends('layouts/adminLayout')

@section('title', 'Admin Login')

@section('content')

<div>
    <div>
        <div>
            <p>
                <b>
                    Sign In
                </b>
            </p>
        </div>
        <form action="Auth" method="POST">
            @csrf
            <div>
                {!! Form::label('employeeID', 'Employee ID:') !!}
                {!! Form::text('id', old('Employee ID'), array('placeholder'=>'Enter Your Employee ID', 'maxlength'=>7)) !!}

                @error('id')
                    <div class="error-msg">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div>
                {!! Form::label('passphrase', 'Password: ') !!}
                {!! Form::password('passphrase', array('placeholder'=>'Enter Your Password')) !!}
                <br>
                @if (isset($msg))
                    {{"Wrong Password"}}
                @endif
                @error('passphrase')
                    <div class="error-msg">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <a href="passReset">Forgot Your Password?</a>
            <div>
                {!! Form::submit('Login') !!}
            </div>
        </form>
    </div>
</div>

@endsection
