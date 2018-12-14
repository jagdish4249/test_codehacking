@extends('layouts.admin')

@section('content')
    <h1>create users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files' => true, 'enctype' =>"multipart/form-data"]); !!}
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('role_id','Role:') !!}
            {!! Form::select('role_id',[''=>'choose option']+(array)$roles,null,['class'=>'form-control']) !!}
        </div>




    <div class="form-group">
            {!! Form::label('is_active','Status:') !!}
            {!! Form::select('is_active',array(1=>'active',0=>'not active'),null,['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('create User',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @include('includes.form_error')



    @endsection

