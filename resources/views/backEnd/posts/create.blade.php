@extends('backLayout.app')
@section('title')
Create new Post
@stop

@section('content')

    <h1>Create New Post</h1>
    <hr/>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'files'=>true, 'class'=>'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
                {!! Form::label('body', 'Body: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('photo_id') ? 'has-error' : ''}}">
                {!! Form::label('photo_id', 'Photo Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('photo_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection