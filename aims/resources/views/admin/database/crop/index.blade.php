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

                @if(isset($user))
                    <td>Operation</td>
                @endif
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

    @if(isset($user))
        <a href="{{ route('crop.create') }}">Add</a>
    @endif

@endsection
