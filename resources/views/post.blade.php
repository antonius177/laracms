<!DOCTYPE html>
<html>
	<head>
		<title>Laravel</title>
		
	</head>
	<body>
		<div class="container">
			<h1>Post{{$id}} {{$name}} {{$password}}</h1>
		</div>
	</body>
</html>

@extends('layouts.app')



@section('content')

	<h1>post{{$id}} {{$name}} {{$password}}</h1>
	
	@stop
		