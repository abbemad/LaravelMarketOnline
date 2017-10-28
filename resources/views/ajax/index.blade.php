@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                
                User Dashboard
                
                <button class="btn btn-info pull-right btn-xs" id="read-data">Load Data Ajax</button>

                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>E-mail</th>
                                <th>Created</th>
                                <th>Updated</th>
                            </tr>
                        </thead>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

    <script type="text/javascript">
        $('#read-data').on('click',function(){
            alert('Ajaxtest');
        })
    </script>

@endsection