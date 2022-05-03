@extends('layouts/layout')

@section('title', 'Crop Database')

@section('content')

<div class="container">
    <div class="box d-flex align-items-center">
        <div class="d-inline-block">
            <h1>Crop Database</h1>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Province</td>
                <td>Municipality</td>
                <td>Ward</td>
                <td>Market Rate Price</td>
                <td>Farmers Rate Price</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['province'] }}</td>
                <td>{{ $data['municipality'] }}</td>
                <td>{{ $data['ward'] }}</td>
                <td>Rs. {{ $data['mrp'] }}</td>
                <td>Rs. {{ $data['frp'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="clearfix">
        <button class="btn btn-success btn-lg float-right">Add Crop</button>
    </div>
</div>

@endsection
