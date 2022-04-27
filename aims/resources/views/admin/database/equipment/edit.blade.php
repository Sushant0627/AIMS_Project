@extends('layouts/databaseLayout')

@section('title', 'Edit Equipment')

@section('content')
    <h1>Edit Equipment Data</h1>
    <form action="{{ route('equipment.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $data['id'] }}" name="id">

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $data['name'] }}" id="name"><br>

        <label for="name">MRP</label>
        <input type="text" name="mrp" value="{{ $data['mrp'] }}" id="mrp"> <br>

        <button type="submit">Submit</button>
    </form>

@endsection
