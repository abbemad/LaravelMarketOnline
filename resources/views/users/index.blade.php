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
            <th>Name</th>
            <th>Email</th>
            <th>ID</th>
        </tr>
    </thead>
        <tbody>
            @foreach($users as $stu)
                <tr>
                    <td> {{ $stu->name }} </td>
                    <td> {{ $stu->email }} </td>
                </tr>
                @endforeach
        </tbody>    
    </table>
    <a href="{{ URL::to('/admin/users/insert') }}">Add new user</a>
</body>
</html>