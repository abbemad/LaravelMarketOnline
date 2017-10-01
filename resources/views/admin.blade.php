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

                    <a href="{{ URL ('users')}}" class="btn btn-sm btn-primary">Show all users</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
