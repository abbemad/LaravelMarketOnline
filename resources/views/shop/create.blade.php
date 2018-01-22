@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style type="text/css">
        html,body{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <h1>Order</h1>
    <hr>
    <form action="{{ URL::to('/order/store')}}" method="POST">
        {{ csrf_field() }}
        <table>
        <tr>
                <td>id</td>
                <td>
                    <input type="number" name="id">
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>

            <tr>
                <td>User ID</td>
                <td>
                    <input type="number" name="user_id">
                </td>
            </tr>

            <tr>
                <td>Product ID</td>
                <td>
                    <input type="number" name="product_id">
                </td>
            </tr>

            <tr>
                <td>Days</td>
                <td>
                    <input type="number" name="days">
                </td>
            </tr>
            
            <tr>
                <td>Amount</td>
                <td>
                    <input type="number" name="amount" min="1" max="1000">
                </td>
            </tr>

            <td>
                <input type="submit" value="Submit">
            </td>

            <a href="{{ URL::to('/') }}">Return</a>

        </table>
    </form>
</body>
</html>