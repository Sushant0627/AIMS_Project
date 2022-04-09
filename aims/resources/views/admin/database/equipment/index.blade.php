@extends('layouts/databaseLayout')

@section('title', 'Equipment Database')

@section('content')

    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Market Rate Price</td>
                <td>Operation</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data['name']}}</td>
                <td>Rs. {{$data['mrp']}}</td>
                <td><a href="{{ 'eDelete/'.$data['id'] }}">Delete</a> |
                    <a href="{{ 'eEdit/'.$data['id'] }}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('equipment.create') }}">Add</a>

@endsection
