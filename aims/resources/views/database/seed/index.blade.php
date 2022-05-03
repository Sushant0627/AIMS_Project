@extends('layouts/layout')

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
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['growth'] }}</td>
                <td><img src="{{asset($data['imgName'])}}(WIP)"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
