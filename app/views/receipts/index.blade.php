@extends('default')
 
@section('content')
<h1>Categorias</h1>
<hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
			<h3 class="panel-title"> Categorias</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><i class="fa fa-filter"></i>&nbsp; Filter</button>
					 &nbsp;<button class="btn btn-default btn-xs btn-filter"><i class="fa fa-plus"></i>&nbsp; Add</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Nome" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Ações" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bebida</td>
                        <td>Editar | Deletar</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Legumes</td>
                        <td>Editar | Deletar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@stop