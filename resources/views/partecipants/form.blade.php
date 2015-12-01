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
	@if ($create)
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
	@else
	{!! Form::email('email', null, ['class' => 'form-control', 'readonly' => true]) !!}
	@endif
</div>
<div class="form-group">
	{!! Form::label('phone number', 'telefono') !!
	{!! Form::phone number('telefono', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>