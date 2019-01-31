@extends('layouts.admin')





@section('content')

    <h1>Edit Users</h1>

    <div class="col-sm-3">
       
            <img height="150" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded" >
        
        
    </div>

    {!! Form::model($user, ['method'=>'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('name','Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Email: ') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id','Role: ') !!}
            {!! Form::select('role_id',$roles, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status','Status: ') !!}
            {!! Form::select('status', array(1=>'Active', 0=>'Not Active'),null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password','Password: ') !!}
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','File: ') !!}
            {!! Form::file('photo_id',null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

    @include('includes.form_error')

@stop