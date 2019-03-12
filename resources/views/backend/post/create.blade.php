@extends('layouts.admin')

@section('content')
    <h1>Create posts</h1>
    @if(session('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif

    {!! Form::open(['method' => 'POST','action'=>'PostController@store','files'=>true]) !!}
    {{csrf_field()}}
    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null , ['class' => 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::label('image', 'Image:') !!}
        {!! Form::file('image', null , ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null , ['class' => 'form-control','rows'=>5]) !!}

    </div>



    <div class="form-group">

        {!! Form::submit('Create Posts', ['class' => 'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}

@stop