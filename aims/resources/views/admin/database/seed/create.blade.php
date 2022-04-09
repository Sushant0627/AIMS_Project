@extends('layouts/databaseLayout')

@section('title', 'Add Seed Data')

@section('content')

<form action="{{ route('seed.store') }}" enctype="multipart/form-data"   method="post">
    @csrf
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" placeholder="Enter Crop Name"> <br>
    @error('name')
        {{ $message }} <br>
    @enderror

    <label for="growth">Growth: </label>
    <input type="text" name="growth" id="growth" placeholder="Growth"> <br>
    @error('growth')
        {{ $message }} <br>
    @enderror

    <label for="picture">Picture: </label>
    <input type="file" name="picture" id="picture"><br>
    @error('picture')
        {{ $message }} <br>
    @enderror

    <button type="submit">Submit</button>
</form>
@endsection
