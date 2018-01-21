@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
    <style type="text/css">
        html,body{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>New Task</h1>
    <hr>
    <form action="{{ URL::to('/admin/users/save')}}" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>

            <tr>
                <td>E-mail</td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>

            <td>
                <input type="submit" value="Submit">
            </td>

            <a href="{{ URL::to('/admin/users/list') }}">Return</a>

        </table>
    </form>
</body>
</html>