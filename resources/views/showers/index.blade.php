@extends('layouts/app')

@section('content')
    @foreach($showers as $shower)
          <ul>
              <li><a href="{{$shower->id}}">{{$shower->name}}</a></li>
          </ul>      
    @endforeach
@stop