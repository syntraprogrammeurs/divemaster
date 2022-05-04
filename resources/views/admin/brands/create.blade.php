@extends('layouts.admin_template')
@section('content')
    @include('admin.includes.form_error')
    <h1><span class="badge badge-primary display-1 shadow">Create Brand</span></h1>
    {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdminBrandsController@store','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Brand',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
@stop
