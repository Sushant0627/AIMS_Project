@extends('layouts/databaseLayout')

@section('title', 'Employee Sheet')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <td>SN</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Employee ID</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td>{{ $data['id'] }}</td>
                <td>{{ $data['fname'] }}</td>
                <td>{{ $data['lname'] }}</td>
                <td>{{ $data['email'] }}</td>
                <td>{{ $data['eid'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
