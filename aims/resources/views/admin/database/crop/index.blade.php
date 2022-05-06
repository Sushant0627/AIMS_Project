@extends('layouts/dashboardLayout')

@section('title', 'Crop Database')

@section('content')

<div class="container">
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
                @if(session('user')=='admin')
                    <td><a href="{{ 'cDelete/'.$data['id'] }}">Delete</a> |
                        <a href="{{ 'cEdit/'.$data['id'] }}">Edit</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success btn-lg btn-block" href="{{ route('crop.create') }}">Add</a>
    <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
</div>


@endsection
