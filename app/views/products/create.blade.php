@extends('default')

@section('content')
<h1> Criar Produto</h1>
<hr>
{{ Form::open(array('url' => 'products','class' => 'form-horizontal')) }}

  @include('products._form')

<br>
<div class="pull-left">
	<button type="submit" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp; Salvar</button>
	&nbsp; <a href="{{ url('categories') }}" title="Cancelar" class="btn btn-danger"><i class="fa fa-plus"></i>&nbsp; Cancelar</a>
</div>
{{ Form::close() }}
@stop