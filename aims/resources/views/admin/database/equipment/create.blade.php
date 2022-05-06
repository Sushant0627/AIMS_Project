@extends('layouts/dashboardLayout')

@section('title', 'Add Equipment Data')

@section('content')
<div class="container">
    <h1>Add Equipment Data</h1>
    <form action="{{ route('equipment.store') }}" method="post">
        @csrf
        <div class="form-floating">
            <input class="form-control" type="text" name="name" placeholder="Name" id="floatingInput"><br>
            <label for="floatingInput">Name</label>
        </div>
        @error('name')
            {{ $message }} <br>
        @enderror

        <div class="form-floating">
            <input class="form-control" type="text" name="mrp" placeholder="MRP" id="floatingInput"> <br>
            <label for="floatingInput">Market Rate Price</label>
        </div>
        @error('mrp')
            {{ $message }} <br>
        @enderror

        <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
        <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
    </form>
</div>

@endsection
