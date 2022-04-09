@extends('layouts/databaseLayout')

@section('title', 'Edit Livestock')

@section('content')

    <form action="{{ route('livestock.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $data['id'] }}" name="id">

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $data['name'] }}" id="name"><br>

        <label for="mrp">Market Rate Price: </label>
        <input type="text" name="mrp" value="{{ $data['mrp'] }}" id="mrp"><br>

        <label for="frp">Farmers Rate Price</label>
        <input type="text" name="frp" value="{{ $data['frp'] }}" id="frp"><br>

        <button type="submit">Submit</button>
    </form>

@endsection
