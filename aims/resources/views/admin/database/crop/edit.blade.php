@extends('layouts/databaseLayout')

@section('title', 'Edit Crop')

@section('content')

    <form action="{{ route('crop.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $data['id'] }}" name="id">

        <label for="crop">Name</label>
        <input type="text" name="crop" value="{{ $data['crop'] }}" id="crop"><br>

        <label for="province">Province</label>
        <input type="text" name="province" value="{{ $data['province'] }}" id="province"><br>

        <label for="municipality">Municipality</label>
        <input type="text" name="municipality" value="{{ $data['municipality'] }}" id="municipality"><br>

        <label for="ward">Ward</label>
        <input type="text" name="ward" value="{{ $data['ward'] }}" id="ward"><br>

        <label for="mrp">Market Rate Price</label>
        <input type="text" name="mrp" value="{{ $data['mrp'] }}" id="mrp"><br>

        <label for="frp">Farmer Rate Price</label>
        <input type="text" name="frp" value="{{ $data['frp'] }}" id="frp"><br>

        <button type="submit">Submit</button>
    </form>

@endsection
