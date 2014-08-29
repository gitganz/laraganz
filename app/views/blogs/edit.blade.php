@extends('layouts.default');

@section('content');			

	<h1>Edit {{ $blog->title }}</h1>

	<!-- if there are creation errors, they will show here -->
	{{ HTML::ul($errors->all()) }}

	{{ Form::model($blog, array('route' => array('blogs.update', $blog->id), 'method' => 'PUT')) }}

		<div class="form-group">
			{{ Form::label('title', 'title') }}
			{{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('posts', 'Posts') }}
			{{ Form::textarea('posts', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit the blog!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
			
@stop