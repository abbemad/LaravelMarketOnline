@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>
                    <div class="panel-body">
<head>
    <title>Products</title>
</head>
<body>
    <table class= table table-hover>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Amount</th>
            <th>User</th>
        </tr>
    </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td> {{ $product->id }} </td>
                    <td> {{ $product->name }} </td>
                    <td> {{ $product->description }} </td>
                    <td> {{ $product->stock }} </td>
                    <td> {{ $product->price }} </td>
                    <td> {{ $product->amount }} </td>
                    <td> {{ $product->user_id }} </td>

                    <td><a href="{{ URL::to('/admin/products/edit',$product->id) }}">Edit user</a> </td>
                </tr>
                @endforeach
        </tbody>    
    </table>
        <a href="{{ URL::to('/admin/products/create') }}">Add new product</a>
            <br>
        <a href="{{ URL::to('/admin/') }}">Return</a>
</body>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection