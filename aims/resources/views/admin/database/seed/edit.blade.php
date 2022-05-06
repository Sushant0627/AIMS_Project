@extends('layouts/dashboardLayout')

@section('title', 'Edit Seed')

@section('content')
<div class="container">
    <h1>Edit Seed In Database</h1>
    <form action="{{ route('seed.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $data['id'] }}" name="id">

        <div class="row mb-3">
            <div class="form-floating col">
                <input class="form-control" type="text" name="name" value="{{ $data['name'] }}" id="name">
                <label for="name">Name</label>
            </div>

            <div class="form-floating col">
                <input class="form-control" type="text" name="growth" value="{{ $data['growth'] }}" id="growth">
                <label for="growth">Growth</label>
            </div>
        </div>

        <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
        <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
    </form>
</div>
@endsection
