@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>User list</title>
</head>
<body>
    <h1>Edit user</h1>
    <hr>
    <form action="{{ URL::to('/admin/users/update')}}" method="POST">
        {{ csrf_field() }}
        <table>

            <tr>
                <td>ID</td>
                <td>
                    <input type="hidden" name="id" value="{{  $users->id  }}">
                </td>
            </tr>

            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="{{  $users->name  }}">
                </td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td>
                    <input type="email" name="email" value="{{  $users->email  }}">
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" value="{{  $users->password  }}">
                </td>
            </tr>

            <td>
                <input type="submit" value="Submit">
            </td>

        </table>
    </form>
    <a href="{{ URL::to('/admin/users/list') }}">Return</a>
</body>
</html>