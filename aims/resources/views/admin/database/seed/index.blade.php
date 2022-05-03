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

@section('title', 'Seed Database')

@section('content')
<h1>Seed Database</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Growth (in Days)</td>
                <td>Image</td>

                @if(session('user')=='admin')
                    <td>Operation</td>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['growth'] }}</td>
                <td><img src="{{asset($data['imgName'])}}(WIP)"></td>
                @if(session('user')=='admin')
                    <td><a href="{{ 'sDelete/'.$data['id'] }}">Delete</a> |
                        <a href="{{ 'sEdit/'.$data['id'] }}">Edit</a></td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>

    @if(session('user')=='admin')
        <a href="{{ route('seed.create') }}">Add</a>
    @endif

@endsection
