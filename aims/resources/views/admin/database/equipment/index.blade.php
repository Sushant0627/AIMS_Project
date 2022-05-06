@extends('layouts/dashboardLayout')

@section('title', 'Equipment Database')

@section('content')

<div class="container">
    <h1>Equipment Database</h1>
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

    <a class="btn btn-success btn-lg btn-block" href="{{ route('equipment.create') }}">Add</a>
    <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
</div>


@endsection
