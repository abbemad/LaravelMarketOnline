@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User list</div>
                    <div class="panel-body">
<head>
    <title>User list</title>
</head>
<body>
    <table class= table table-hover>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td> {{ $user->id }} </td>
                    <td> {{ $user->name }} </td>
                    <td> {{ $user->email }} </td>
                    <!-- '\/ is om 1 schuine streep neer te zetten veranderd naar , dit werkt beter' -->
                    <td><a href="{{ URL::to('/admin/users/edit',$user->id) }}">Edit user</a> </td>

                    <td><a href="{{ URL::to('/admin/users/delete',$user->id) }}" onclick="return confirm('Are you sure you want to delete the user : {{$user->name}} ')"> Delete user</a> </td>
                </tr>
                @endforeach
        </tbody>    
    </table>
        <a href="{{ URL::to('/admin/users/insert') }}">Add new user</a>
            <br>
        <a href="{{ URL::to('/admin/') }}">Return</a>
</body>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection