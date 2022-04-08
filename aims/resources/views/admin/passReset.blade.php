@extends('admin/login')

@section('content')
<div>
    <p>
        <b>
            Reset Your Password
        </b>
    </p>
</div>

<div>
    <form action="" method="post">
        {!! Form::label('eid', 'Employee ID: ') !!}
        {!! Form::text('eid', old('eid'), array('placeholder'=>'Enter Your Employee ID')) !!}

        <br>

        {!! Form::submit('Submit') !!}

        <br>

        <a href="admin">Want To Try Login Again?</a>
    </form>
</div>

@endsection
