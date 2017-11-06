@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Member list</title>
</head>
<body>
    <h1>Member list</h1>
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
            @foreach($memberlist as $mem)
                <tr>
                    <td> {{ $mem->name }} </td>
                    <td> {{ $mem->email }} </td>
                </tr>
                @endforeach
        </tbody>    
    </table>
    <a href="{{ URL::to('/admin/users/member/insert') }}">Make member</a>
</body>
</html>