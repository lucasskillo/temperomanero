<div class="form-group">
    <label for="name" class="col-lg-2 control-label">Nome</label>
    <div class="col-lg-6">
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'required')) }} 
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-lg-2 control-label">E-mail</label>
    <div class="col-lg-4">
       {{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'required')) }} 
    </div>
</div>

<div class="form-group">
    <label for="password" class="col-lg-2 control-label">Senha</label>
    <div class="col-lg-4">
        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Senha')) }}
    </div>
</div>



