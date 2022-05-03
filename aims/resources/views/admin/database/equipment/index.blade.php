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

@section('title', 'Equipment Database')

@section('content')
    <h1>Equipment Database</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Market Rate Price</td>

                @if(session('user'=='admin'))
                    <td>Operation</td>
                @endif
            </tr>
        </thead>

        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data['name']}}</td>
                <td>Rs. {{$data['mrp']}}</td>

                @if(session('user'=='admin'))
                    <td><a href="{{ 'eDelete/'.$data['id'] }}">Delete</a> |
                        <a href="{{ 'eEdit/'.$data['id'] }}">Edit</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    @if(session('user'=='admin'))
        <a href="{{ route('equipment.create') }}">Add</a>
    @endif

@endsection
