@extends('default')

@section('content')
<h1>Editar Usuário</h1>

{{Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

@include('users._form')

{{ Form::submit('Edit User', array('class' => 'btn btn-primary')) }}
{{ Form::close() }}

@stop