@extends('layouts/databaseLayout')

@section('title', 'Edit Seed')

@section('content')
<h1>Edit Farmer's Data</h1>
    <form action="{{ route('farmer.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="fname">First Name: </label>
    <input type="text" name="fname" id="fname" value="{{ $data['fname'] }}" placeholder="Enter First Name"> <br>
    @error('fname')
        {{ $message }} <br>
    @enderror

    <label for="mname">Middle Name: </label>
    <input type="text" name="mname" id="mname" value="{{ $data['mname'] }}" placeholder="Enter Middle Name"> <br>
    @error('mname')
        {{ $message }} <br>
    @enderror

    <label for="lname">Last Name: </label>
    <input type="text" name="lname" id="laname" value="{{ $data['lname'] }}" placeholder="Enter Last Name"> <br>
    @error('lname')
        {{ $message }} <br>
    @enderror

    <label for="age">Age: </label>
    <input type="text" name="age" id="age" value="{{ $data['age'] }}" placeholder="Enter Your Age"> <br>
    @error('age')
        {{ $message }} <br>
    @enderror

    <label for="gender">Gender: </label>
    <select name="gender" id="gender" value="{{ $data['gender'] }}">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Others</option>
    </select> <br>
    @error('gender')
        {{ $message }} <br>
    @enderror

    <label for="dob">Date of Birth: </label>
    <input type="date" name="dob" id="dob" value="{{ $data['dob'] }}"> <br>
    @error('dob')
        {{ $message }} <br>
    @enderror

    <label for="address">Address: </label>
    <input type="text" name="address" id="address" value="{{ $data['address'] }}"> <br>
    @error('address')
        {{ $message }} <br>
    @enderror

    <label for="province">Province: </label>
    <input type="text" name="province" id="province" value="{{ $data['province'] }}"> <br>
    @error('address')
        {{ $message }} <br>
    @enderror

    <label for="state">State: </label>
    <input type="text" name="state" id="state" value="{{ $data['state'] }}"> <br>
    @error('state')
        {{ $message }} <br>
    @enderror

        <button type="submit">Submit</button>
    </form>

@endsection
