@extends('app')

@section('title')
New partecipant
@stop

@section('content')
<h1>Inserimento nuovo partecipante</h1>
<hr />
{!! Form::model($partecipant = new \App\Partecipant, array('action' => 'PartecipantsController@index')) !!}
	@include('partecipants.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop