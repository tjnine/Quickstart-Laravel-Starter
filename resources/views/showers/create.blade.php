@extends('layouts/app')

@section('content')
             <div class="col-md-8">
                 {!! Form::open([
                         'route'=>'showers.store',
                         'method'=>'Post',
                        'files'=> 'true',
                     ]) !!}

        {{csrf_field()}}

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
        </div>

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>
        </div>

                 <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">Type</label>
                     <div class="col-sm-10">
                         <input type="text" class="form-control" name="type" placeholder="Type">
                     </div>
                 </div>

                 {{--<div class="form-group">--}}
                     {{--<label for="inputEmail3" class="col-sm-2 control-label">Install</label>--}}
                     {{--<div class="col-sm-10">--}}
                         {{--<input type="text" class="form-control" name="install" placeholder="Install Time">--}}
                     {{--</div>--}}
                 {{--</div>--}}

        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <textarea name="description" name="description" cols="100" rows="10"></textarea>
            </div>
        </div>

                 <div class="form-group">
                     {!! Form::label('Image') !!}
                     {!! Form::file('image') !!}
                 </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Create</button>
            </div>
        </div>

             </div>
    {!! Form::close() !!}

@stop