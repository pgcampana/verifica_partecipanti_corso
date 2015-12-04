@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Partecipanti al corso analista programmatore</h1>
@if (count($partecipants))
<ul>
	@foreach ($partecipants as $partecipant)
		<div>
			<h2><a href="{{action('PartecipantsController@show', [$partecipant->id])}}">{{$partecipant->name}} {{$partecipant->surname}}</a></h2>
			<ul>
				<li>{{$partecipant->id}}</li>
				<li>{{$partecipant->email}}</li>
				<li>{{$partecipant->phone}}</li>
			</ul>
		</div>
	@endforeach
</ul>
@else
<p>no partecipants</p>
@endif

@stop


