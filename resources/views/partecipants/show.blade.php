@extends('app')

@section('title')
{{$partecipant->name}}
@stop

@section('content')
<h1>{{$partecipant->name}}</h1>
<ul>
	<li>{{$partecipant->id}}</li>
	<li>{{$partecipant->name}}</li>
	<li>{{$partecipant->surname}}</li>
	<li>{{$partecipant->email}}</li>
	<li>{{$partecipant->phone}}</li>
</ul>
@stop