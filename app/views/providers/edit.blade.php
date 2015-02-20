@extends('default')

@section('content')
<h1>Editar Fornecedor</h1>
<hr>
{{Form::model($provider, array('route' => array('providers.update', $provider->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

@include('providers._form')

<br>
<div class="pull-left">
	<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Salvar</button>
	&nbsp; <a href="{{ url('providers') }}" title="Cancelar" class="btn btn-danger"><i class="fa fa-plus"></i>&nbsp; Cancelar</a>
</div>
{{ Form::close() }}

@stop