@extends('default')

@section('content')
<h1> Criar Usuário</h1>
<hr>
{{ Form::open(array('url' => 'users', 'class' => 'form-horizontal')) }}

@include('users._form')

<br>
<div class="pull-left">
	<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Salvar</button>
	&nbsp; <a href="{{ URL::to('users')  }}"><button class="btn btn-danger"><i class="fa fa-times"></i>&nbsp; Cancelar</button></a>
</div>
{{ Form::close() }}

@stop