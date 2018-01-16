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
            @foreach($users as $stu)
                <tr>
                    <td> {{ $stu->id }} </td>
                    <td> {{ $stu->name }} </td>
                    <td> {{ $stu->email }} </td>
                    <!-- '\/ is om 1 schuine streep neer te zetten veranderd naar , dit werkt beter' -->
                    <td><a href="{{ URL::to('/admin/users/edit',$stu->id) }}">Edit user</a> </td>

                    <td><a href="{{ URL::to('/admin/users/delete',$stu->id) }}" onclick="return confirm('Are you sure you want to delete this user')">Delete user</a> </td>
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