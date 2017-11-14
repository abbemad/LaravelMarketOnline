@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>User list</title>
</head>
<body>
    <h1>User list</h1>
    <hr>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
        <tbody>
            @foreach($users as $stu)
                <tr>
                    <td> {{ $stu->id }} </td>
                    <td> {{ $stu->name }} </td>
                    <td> {{ $stu->email }} </td>
                    <!-- '\/ is om 1 schuine streep neer te zetten' -->
                    <td><a href="{{ URL::to('/admin/users/edit\/') }}{{ $stu->id }}">Edit user</a> </td>
                </tr>
                @endforeach
        </tbody>    
    </table>
    <a href="{{ URL::to('/admin/users/insert') }}">Add new user</a>
</body>
</html>