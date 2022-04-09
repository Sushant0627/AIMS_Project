@extends('layouts/databaseLayout')

@section('title', 'Add Crop Data')

@section('content')

<form action="{{ route('crop.store') }}" method="post">
    @csrf
    <label for="name">Name: </label>
    <input type="text" name="crop" id="name"> <br>
    @error('crop')
        {{ $message }} <br>
    @enderror

    <label for="province">Province: </label>
    <select name="province" id="province" onload="select()" onclick="select()">
        Province:
        <option value="-">--</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
    </select><br>
    @error('province')
        {{ $message }} <br>
    @enderror

    <label for="municipality">Municipality: </label>
    <input type="text" name="municipality" id="municipality"><br>
    @error('municipality')
        {{ $message }} <br>
    @enderror

    <label for="ward">Ward: </label>
    <input type="text" name="ward" id="ward"><br>
    @error('ward')
        {{ $message }} <br>
    @enderror

    <label for="mrp">Market Rate Price: </label>
    <input type="text" name="mrp" id="mrp"><br>
    @error('mrp')
        {{ $message }} <br>
    @enderror

    <label for="frp">Farmers Rate Price: </label>
    <input type="text" name="frp" id="frp"><br>
    @error('frp')
        {{ $message }} <br>
    @enderror

    <button type="submit">Submit</button>
</form>
@endsection
