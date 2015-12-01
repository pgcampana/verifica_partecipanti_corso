@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Partecipants</h1>
@if (count($partecipants))
<ul>
	@foreach ($partecipant as $partecipant)
		<partecipant>
			<h2><a href="{{action('PartecipantsController@show', [$partecipant->id])}}">{{$partecipant->name}}</a><h2>
			<ul>
				<li>{{$partecipant->id}}</li>
				<li>{{$partecipant->name}}</li>
				<li>{{$partecipant->surname}}</li>
				<li>{{$partecipant->email}}</li>
				<li>{{$partecipant->phone number}}</li>
			</ul>
		</partecipant>
	@endforeach
</ul>
@else
<p>no partecipants</p>
@endif

@stop