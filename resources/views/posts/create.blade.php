@extends('layouts.app')



@section('content')

	<form action="/posts" method="Post">
	<input type="text" name="title"/>
	<input type="submit" name="submit" />
	</form>
	
@stop


@section('footer')



@stop