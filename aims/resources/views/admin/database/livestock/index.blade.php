@extends('layouts/databaseLayout')

@section('title', 'Livestock Database')

@section('content')

    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Market Rate Price</td>
            <td>Farmers Rate Price</td>
            <td>Operation</td>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data['name']}}</td>
            <td>Rs. {{$data['mrp']}}</td>
            <td>Rs. {{$data['frp']}}</td>
            <td><a href="{{ 'lDelete/'.$data['id'] }}">Delete</a> |
                <a href="{{ 'lEdit/'.$data['id'] }}">Edit</a></td>
        </tr>
        @endforeach
        </td>
    </table>

    <a href="{{ route('livestock.create') }}">Add</a>

@endsection
