@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Task list</div>
                    <div class="panel-body">
<head>
    <title>Task list</title>
</head>
<body>
    <table class= table table-hover>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>User ID</th>
            <th>Order ID</th>
            <th>Days</th>
            <th>Hours</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
    </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td> {{ $task->id }} </td>
                    <td> {{ $task->name }} </td>
                    <td> {{ $task->user_id }} </td>
                    <td> {{ $task->order_id }} </td>
                    <td> {{ $task->days }} </td>
                    <td> {{ $task->hours }} </td>
                    <td> {{ $task->created_at }} </td>
                    <td> {{ $task->updated_at }} </td>
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