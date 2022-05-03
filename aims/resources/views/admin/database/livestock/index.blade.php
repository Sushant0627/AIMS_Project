@if(session('user')==('admin'))
    @php
        $layout = 'databaseLayout'
    @endphp
@else
    @php
        $layout = 'layout'
    @endphp
@endif

@extends('layouts/' . $layout)

@section('title', 'Livestock Database')

@section('content')
    <h1>Livestock Data</h1>
    <table class="table table-striped">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Market Rate Price</td>
            <td>Farmers Rate Price</td>

            @if(session('user'=='admin'))
                    <td>Operation</td>
            @endif
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data['name']}}</td>
            <td>Rs. {{$data['mrp']}}</td>
            <td>Rs. {{$data['frp']}}</td>

            @if(session('user'=='admin'))
                <td><a href="{{ 'lDelete/'.$data['id'] }}">Delete</a> |
                    <a href="{{ 'lEdit/'.$data['id'] }}">Edit</a></td>
            @endif
        </tr>
        @endforeach
        </td>
    </table>

    @if(session('user'=='admin'))
        <a href="{{ route('livestock.create') }}">Add</a>
    @endif

@endsection
