@extends('default')

@section('content')
<h1> Criar Categoria</h1>

{{ Form::open(array('url' => 'categories')) }}

@include('categories._form')

{{ Form::submit('Create User', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop