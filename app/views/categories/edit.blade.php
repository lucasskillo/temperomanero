@extends('default')

@section('content')
<h1>Editar Categoria</h1>
<hr>
{{Form::model($category, array('route' => array('categories.update', $category->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

@include('categories._form')

<br>
<div class="pull-left">
	<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Salvar</button>
	&nbsp; <a href="{{ url('categories') }}" title="Cancelar" class="btn btn-danger"><i class="fa fa-plus"></i>&nbsp; Cancelar</a>
</div>
{{ Form::close() }}

@stop