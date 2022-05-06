@extends('layouts/dashboardLayout')

@section('title', 'Edit Equipment')

@section('content')

<div class="container">
    <h1>Edit Equipment Data</h1>
    <form action="{{ route('equipment.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" value="{{ $data['id'] }}" name="id">

        <div class="form-floating">
            <input class="form-control" type="text" name="name" value="{{ $data['name'] }}" id="floatingInput"><br>
            <label for="floatingInput">Name</label>
        </div>

        <div class="form-floating">
            <input class="form-control" type="text" name="mrp" value="{{ $data['mrp'] }}" id="floatingInput"> <br>
            <label for="floatingInput">MRP</label>
        </div>

        <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
        <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
    </form>
</div>

@endsection
