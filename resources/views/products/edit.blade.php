@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Edit product</title>
</head>
<body>
    <h1>Edit product</h1>
    <hr>
    <form action="{{ URL::to('/admin/products/update')}}" method="POST">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>ID</td>
                <td>
                    <input type="hidden" name="id" value="{{  $product->id  }}">
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="{{  $product->name  }}">
                </td>
            </tr>

            <tr>
                <td>Description</td>
                <td>
                    <input type="text" name="description" value="{{  $product->description  }}">
                </td>
            </tr>

            <tr>
                <td>Stock</td>
                <td>
                    <input type="number" name="stock" value="{{  $product->stock  }}">
                </td>
            </tr>

            <tr>
                <td>Price</td>
                <td>
                    <input type="number" step="any" name="price" value="{{  $product->price  }}">
                </td>
            </tr>

            <tr>
                <td>Amount</td>
                <td>
                    <input type="number" name="amount" value="{{  $product->amount  }}">
                </td>
            </tr>

            <td>
                <input type="submit" value="Submit">
            </td>
            

        </table>
    </form>
    <a href="{{ URL::to('/admin/products') }}">Return</a>
</body>
</html>