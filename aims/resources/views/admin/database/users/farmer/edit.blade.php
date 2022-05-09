@extends('layouts/databaseLayout')

@section('title', 'Edit Seed')

@section('content')
<div class="container">
    <h1>Edit Farmer's Data</h1>
    <form action="{{ route('farmer.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <div class="form-floating col">
                <input class="form-control" type="text" name="fname" value="{{ $data['fname'] }}" id="fname" placeholder="Enter First Name">
                <label for="fname">First Name</label>
            </div>
            @error('fname')
                {{ $message }} <br>
            @enderror

            <div class="form-floating col">
                <input class="form-control" type="text" name="mname" value="{{ $data['mname'] }}" id="mname" placeholder="Enter Middle Name">
                <label for="mname">Middle Name</label>
            </div>
            @error('mname')
                {{ $message }} <br>
            @enderror

            <div class="form-floating col">
                <input class="form-control" type="text" name="lname" value="{{ $data['lname'] }}" id="laname" placeholder="Enter Last Name">
                <label for="lname">Last Name</label>
            </div>
            @error('lname')
                {{ $message }} <br>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="form-floating col">
                <input class="form-control" type="text" name="age" value="{{ $data['age'] }}" id="age" placeholder="Enter Your Age">
                <label for="age">Age</label>
            </div>
            @error('age')
                {{ $message }} <br>
            @enderror

            <div class="form-floating col">
                <input class="form-control" type="date" name="dob" value="{{ $data['dob'] }}" id="dob">
                <label for="dob">Date of Birth: </label>
            </div>
            @error('dob')
                {{ $message }} <br>
            @enderror

            <div class="col">
                <label for="gender">Gender</label>
                <select class="form-select"  name="gender" value="{{ $data['gender'] }}" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Others</option>
                </select>
            </div>
            @error('gender')
                {{ $message }} <br>
            @enderror
        </div>


        <div class="row mb-3">
            <div class="form-floating col">
                <input class="form-control" type="text" name="address" value="{{ $data['address'] }}" id="address">
                <label for="address">Address</label>
            </div>
            @error('address')
                {{ $message }} <br>
            @enderror

            <div class="form-floating col">
                <input class="form-control" type="text" name="province" value="{{ $data['province'] }}" id="province">
                <label for="province">Province: </label>
            </div>
            @error('address')
                {{ $message }} <br>
            @enderror

            <div class="form-floating col">
                <input class="form-control" type="text" name="state" value="{{ $data['state'] }}" id="state">
                <label for="state">State: </label>
            </div>
            @error('state')
                {{ $message }} <br>
            @enderror
        </div>

        <div class="form-label mb-3">
            <label for="picture">Picture</label>
            <input class="form-control" type="file" value="{{ $data['imgName'] }}" name="picture" id="picture">
        </div>
        @error('picture')
            {{ $message }} <br>
        @enderror

        <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
        <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
    </form>
</div>


@endsection
