@extends('layouts/databaseLayout')

@section('title', 'Add Equipment Data')

@section('content')

<form action="{{ route('equipment.store') }}" method="post">
    @csrf
    <label for="name">Name: </label>
    <input type="text" name="name" id="name"><br>
    @error('name')
        {{ $message }} <br>
    @enderror

    <label for="name">Market Rate Price: </label>
    <input type="text" name="mrp" id="mrp"> <br>
    @error('mrp')
        {{ $message }} <br>
    @enderror

    <button type="submit">Submit</button>
</form>
@endsection
