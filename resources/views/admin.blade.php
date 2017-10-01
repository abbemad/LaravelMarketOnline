@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as a <strong>ADMIN<strong>

                    <br></br>
                    <a href="{{ URL ('shop')}}" class="btn btn-sm btn-primary">Usershop</a>
                    <br></br>
                    <a href="{{ URL ('shop')}}" class="btn btn-sm btn-primary">Adminshop</a>
                    <br><br>
                    <a href="{{ URL ('products')}}" class="btn btn-sm btn-primary">Products</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
