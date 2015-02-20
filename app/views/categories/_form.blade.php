<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}
<div class="form-group">
	<label for="id" class="col-sm-1 control-label">ID</label>
     <div class="col-sm-1">
		<input class="form-control" type="text" placeholder="ID" readonly>
	 </div>
</div>

<div class="form-group">
	<label for="name" class="col-sm-1 control-label">Nome</label>
     <div class="col-sm-5">
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'required')) }} 
	 </div>
</div>
