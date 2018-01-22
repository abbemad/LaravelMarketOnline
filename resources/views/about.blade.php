@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">About</div>

                <div class="panel-body">
                
                    About 
                    What countries are we currently shipping to? Press the button
                    <a href="{{ URL::to('country/') }}">Shipping to</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
