@extends('default')
 
@section('content')
<h1>Produtos</h1>
<hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
            <h3 class="panel-title"> Produtos</h3>
                <div class="pull-right">
                     <a href="{{ URL::to('products/create')  }}"><button class="btn btn-default btn-xs"><i class="fa fa-plus"></i>&nbsp; Add</button></a>
                    &nbsp;<button class="btn btn-default btn-xs btn-filter"><i class="fa fa-filter"></i>&nbsp; Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Categoria" disabled></th>
                        <th><placeholder="Ações" disabled></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product -> id}}</td>
                        <td>{{ $product -> name}}</td>
                        <td>Nome Categoria</td>
                        <td><a href="{{URL::to('products/' . $product->id. '/edit')}}"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>&nbsp; Editar</button></a>
                            <a href="{{ URL::to('products/delete/' . $product->id . '/')  }}">&nbsp; <button class="btn btn-danger btn-xs"><i class="fa fa-plus"></i>&nbsp; Deletar</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop