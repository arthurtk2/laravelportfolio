@extends('todo')

	@section('projects')
	
		@foreach($posts_info as $posts)
			<div id="title"><h1>{{$posts->title}}</h1></div>
			<div id="content"><h3>{{$posts->content}}</h3></div>
			<div id="author"><h4>Criado por {{$posts->author}}</h4></div>
		@endforeach
		{{ Form::open(array('url' => 'foo/bar')) }}
		    echo Form::text('username');
		{{ Form::close() }}
	@stop