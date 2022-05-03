@extends('layouts/layout')

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
            </tr>
        </thead>

        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data['name']}}</td>
                <td>Rs. {{$data['mrp']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
