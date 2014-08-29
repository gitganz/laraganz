@extends('layouts.default');

@section('content');

	<h1>Post a Blog</h1>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::open(array('url' => 'blogs')) }}

		<div class="form-group">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('posts', 'Posts:') }}
			{{ Form::textarea('posts', Input::old('posts'), array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Post a Blog', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
			
@stop
	