@extends('master')

@section('css')
	
@stop

@section('content')
	<h1>{{ $single->title }}</h1>
	<h4>{{ $single->content }}</h4>
	<samp>Date: {{ $single->date_pub }}</samp>
@stop
