@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Shop</div>
                    <div class="panel-body">
<head>
    <title>Shop</title>
</head>
<body>
    <table class= table table-hover>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td> {{ $product->id }} </td>
                    <td> {{ $product->name }} </td>
                    <td> {{ $product->description }} </td>
                    <td> {{ $product->price }} </td>
                    <td><a href="{{ URL::to('/order/create',$product->id) }}">Toevoegen</a> </td>
                    <td><a href="{{ URL::to('/order/save',$product->id) }}">In winkelmand</a> </td>
                    <td><a href="{{ URL::to('/order/delete',$product->id) }}" onclick="return confirm('Are you sure you want to remove : {{$product->name}} ')"> Remove</a> </td>
                </tr>
                @endforeach
        </tbody>    
    </table>
            <br>
        <a href="{{ URL::to('/shop') }}">Return</a>
</body>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection