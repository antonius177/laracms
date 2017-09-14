@extends('layout.app')



@section('content')

	<h1>Contact Page</h1>
	
	@if (count($people))
		
	<ul>
	@foreach($people as $person)
	
		<li>{{$person}}</li>
		@endforeach
		@endif
@endsection

@section('footer')
	<script>alert("Hello Visitor")</script>
	
@endsection