@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Partecipants</h1>
@if (count($partecipants))
<ul>
	@foreach ($partecipants as $partecipant)
		<div>
			<h2><a href="{{action('PartecipantsController@show', [$partecipant->id])}}">{{$partecipant->name}}</a></h2>
			<ul>
				<li>{{$partecipant->id}}</li>
				<li>{{$partecipant->name}}</li>
				<li>{{$partecipant->surname}}</li>
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