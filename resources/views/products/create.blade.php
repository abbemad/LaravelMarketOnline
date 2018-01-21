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
    <h1>Products</h1>
    <hr>
    <form action="{{ URL::to('/admin/products/save')}}" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name">
                </td>
            </tr>

            <tr>
                <td>Description</td>
                <td>
                    <input type="text" name="description">
                </td>
            </tr>

            <tr>
                <td>Stock</td>
                <td>
                    <input type="number" name="stock" min="1" max="1000">
                </td>
            </tr>

            <tr>
                <td>Price</td>
                <td>
                    <input type="number" name="price" min="0.00" max="10000.00" step="0.01">
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

            <a href="{{ URL::to('/admin/products') }}">Return</a>

        </table>
    </form>
</body>
</html>