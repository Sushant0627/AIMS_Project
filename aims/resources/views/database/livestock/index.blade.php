@extends('layouts/layout')

@section('title', 'Livestock Database')

@section('content')

<div class="container">
    <h1>Livestock Data</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Market Rate Price</td>
                <td>Farmers Rate Price</td>
            </tr>
        </thead>
        @foreach ($datas as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data['name']}}</td>
            <td>Rs. {{$data['mrp']}}</td>
            <td>Rs. {{$data['frp']}}</td>
        </tr>
        @endforeach
        </td>
    </table>

    @if(session('user') == 'normal')
        <div class="clearfix">
            <a class="btn btn-success btn-lg float-right" href="{{ route('livestock.create') }}">Add Livestock</a>
        </div>
    @endif
</div>

@endsection
