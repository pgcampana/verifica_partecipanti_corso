<div class="form-group">
	{!! Form::label('name', 'nome') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('surname', 'cognome') !!}
	{!! Form::text('surname', null, ['class' => 'form-control']) !!}
	</div>
<div class="form-group">
	{!! Form::label('email', 'email') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('phone', 'telefono') !!}
	{!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>