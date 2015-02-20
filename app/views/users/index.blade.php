@extends('default')
 
@section('content')
<h1>Usuários</h1>
<hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
			<h3 class="panel-title"> Usuários</h3>
                <div class="pull-right">
                     <a href="{{ URL::to('users/create')  }}"><button class="btn btn-default btn-xs"><i class="fa fa-plus"></i>&nbsp; Add</button></a>
                    &nbsp;<button class="btn btn-default btn-xs btn-filter"><i class="fa fa-filter"></i>&nbsp; Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><placeholder="Ações" disabled></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user -> id}}</td>
                        <td>{{ $user -> name}}</td>
                        <td>{{ $user -> email}}</td>
                        <td><a href="{{URL::to('users/' . $user->id. '/edit')}}"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>&nbsp; Editar</button></a>
                            <a href="{{ URL::to('users/delete/' . $user->id . '/')  }}">&nbsp; <button class="btn btn-danger btn-xs"><i class="fa fa-plus"></i>&nbsp; Deletar</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop