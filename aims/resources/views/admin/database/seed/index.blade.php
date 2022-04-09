@extends('layouts/databaseLayout')

@section('title', 'Seed Database')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Growth (in Days)</td>
                <td>Image</td>
                <td>Operation</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['growth'] }}</td>
                <td><img src="{{asset($data['imgPath'])}}"></td>
                <td><a href="{{ 'sDelete/'.$data['id'] }}">Delete</a> |
                    <a href="{{ 'sEdit/'.$data['id'] }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('seed.create') }}">Add</a>

@endsection
