@extends('default')

@section('content')
<h1>Editar Categoria</h1>

{{Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT')) }}

@include('categories._form')

{{ Form::submit('Edit Category', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop