@extends('master')

@section('css')
	
@stop


@section('content')

	<h1>List of Articles</h1>
	<hr/>
	
	@foreach ($articles as $art)
		<article>	
		<a href="{{ action('laraController@show', [$art->id]) }}">
		<h3> {{ $art->title }} </h3>
		</a>
			{{ $art->content }}
		</article>
	@endforeach

@endsection