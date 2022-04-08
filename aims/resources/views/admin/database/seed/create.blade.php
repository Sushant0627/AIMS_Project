@extends('layouts/databaseLayout')

@section('title', 'Add Seed Data')

@section('content')
<form action="{{ route('seed.store') }}" enctype="multipart/form-data"   method="post">
    @csrf
    {!! Form::label('name', 'Name: ') !!}
    {!! Form::text('name', NULL ,array('placeholder'=>'Crop Name')) !!}
    <br>
    {!! Form::label('picture', 'Image: ') !!}
    {!! Form::file('picture') !!}
    <br>
    {!! Form::submit("Submit") !!}
</form>
@endsection
