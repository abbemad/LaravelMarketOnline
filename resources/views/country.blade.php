@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Country</div>

                <div class="panel-body">
                
                    Country
                    Which countries do we deliver to 
                    <br></br>
                    
                    @foreach ($countries as $country)
                    <pre>This is country number {{ $country->id }} Country name: {{$country->countryName }} </pre>
                    @endforeach
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
