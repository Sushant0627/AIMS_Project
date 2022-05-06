@extends('layouts/dashboardLayout')

@section('title', 'Edit Livestock')

@section('content')
<div class="container">
    <h1>Edit Livestock Data</h1>

    <form action="{{ route('livestock.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{ $data['id'] }}" name="id">

        <div class="form-floating mb-3">
            <input class="form-control" type="text" name="name" value="{{ $data['name'] }}" id="name"><br>
            <label for="name">Name</label>
        </div>

        <div class="row mb-3">
            <div class="form-floating col">
                <input class="form-control" type="text" name="mrp" value="{{ $data['mrp'] }}" id="mrp"><br>
                <label for="mrp">Market Rate Price</label>
            </div>

            <div class="form-floating col">
                <input class="form-control" type="text" name="frp" value="{{ $data['frp'] }}" id="frp"><br>
                <label for="frp">Farmers Rate Price</label>
            </div>

        </div>

        <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
        <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
    </form>
</div>
@endsection
