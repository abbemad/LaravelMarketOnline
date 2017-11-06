@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>User Insert list</title>
    <style type="text/css">
        html,body{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>New Member subscription</h1>
    <hr>
    <form action="{{ URL::to('/admin/users/member/insert')}}" method="POST">
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
                <td>Member</td>
                <td>
                    <select name="member">
                        <option>-------------</option>

                    </select>
                </td>
            </tr>

            <td>
                <input type="submit" value="Submit">
            </td>

            <a href="{{ URL::to('/admin/users/member') }}">Return</a>

        </table>
    </form>
</body>
</html>