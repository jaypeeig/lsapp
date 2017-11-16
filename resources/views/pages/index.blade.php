@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center">
		<h2>{{$title}}</h2>
		<p>{{$content}}</p>
		<a href="/login" class="btn btn-success">Login</a>
		<a href="/register" class="btn btn-primary">Register</a>
	</div>
@endsection