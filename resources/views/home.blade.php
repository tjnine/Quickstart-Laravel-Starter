@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mt Top Glass</div>

                <div class="panel-body">
                    <h3>Create A Shower Listing</h3>
                    {{link_to_route('showers.create')}}
                </div>

                <div class="panel-body">
                    {{link_to_route('showers.index')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
