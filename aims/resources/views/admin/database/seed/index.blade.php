@extends('layouts/dashboardLayout')

@section('title', 'Seed Database')

@section('content')
<div class="container">
    <h1>Seed Database</h1>
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
                <td><img src="{{asset($data['imgName'])}}(WIP)"></td>
                <td><a href="{{ 'sDelete/'.$data['id'] }}">Delete</a> |
                    <a href="{{ 'sEdit/'.$data['id'] }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success btn-lg btn-block" href="{{ route('seed.create') }}">Add</a>
    <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
</div>
@endsection
