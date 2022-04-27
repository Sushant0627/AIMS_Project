@extends('layouts/databaseLayout')

@section('title', 'Crop Database')

@section('content')
<h1>Crop Database</h1>
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
                <td>Operation</td>
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
                <td><a href="{{ 'cDelete/'.$data['id'] }}">Delete</a> |
                    <a href="{{ 'cEdit/'.$data['id'] }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('crop.create') }}">Add</a>

@endsection
