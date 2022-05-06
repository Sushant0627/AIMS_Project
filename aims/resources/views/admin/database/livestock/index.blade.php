@extends('layouts/dashboardLayout')

@section('title', 'Livestock Database')

@section('content')
<div class="container">
    <h1>Livestock Data</h1>
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

    <a class="btn btn-success btn-lg btn-block" href="{{ route('livestock.create') }}">Add</a>
    <a class="btn btn-success btn-lg btn-block" href="javascript:history.back()">Back</a>
</div>
@endsection
