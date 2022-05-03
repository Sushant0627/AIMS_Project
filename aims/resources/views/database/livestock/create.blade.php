@extends('layouts/databaseLayout')

@section('title', 'Add Livestock Data')

@section('content')

<h1>Add a Livestock Data</h1>

<form action="{{ route('livestock.store') }}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name"><br>
    @error('name')
        {{ $message }} <br>
    @enderror

    <label for="mrp">Market Rate Price: </label>
    <input type="text" name="mrp" id="mrp"><br>
    @error('mrp')
        {{ $message }} <br>
    @enderror

    <label for="frp">Farmers Rate Price</label>
    <input type="text" name="frp" id="frp"><br>
    @error('frp')
        {{ $message }} <br>
    @enderror

    <button type="submit">Submit</button>
</form>
@endsection
