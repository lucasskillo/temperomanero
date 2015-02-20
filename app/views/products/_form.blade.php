<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
<div class="form-group">
	<label for="id" class="col-sm-2 control-label">ID</label>
     <div class="col-sm-1">
		<input class="form-control" type="text" placeholder="ID" readonly>
	 </div>
</div>

<div class="form-group">
	<label for="name" class="col-sm-2 control-label">Nome</label>
     <div class="col-sm-5">
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'required')) }} 
	 </div>
</div>

<div class="form-group">
	<label for="name" class="col-sm-2 control-label">Unidade de Medida</label>
     <div class="col-sm-2">
		{{ Form::text('unidade_medida', Input::old('unidade_medida'), array('class' => 'form-control', 'required')) }} 
	 </div>
</div>


<div class="form-group">
	<label for="name" class="col-sm-2 control-label">Categoria</label>
     <div class="col-sm-2">
		{{ Form::select('category_name', $categories, null, array('class' => 'form-control')) }}
	 </div>
</div>
