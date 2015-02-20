@extends('default')

@section('content')
<h1>Editar Usuário</h1>
<hr>
{{Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}

@include('users._form')

<br>
<div class="pull-left">
	<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Salvar</button>
	&nbsp; <a href="{{ url('users') }}" title="Cancelar" class="btn btn-danger"><i class="fa fa-plus"></i>&nbsp; Cancelar</a>
</div>
{{ Form::close() }}

@stop