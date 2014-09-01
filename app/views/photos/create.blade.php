@extends('layouts.default');

@section('content');

	<h1>Upload a New Photo</h1>

	{{ Form::open(['route' => 'photos.store', 'files' => true]) }}
		{{ Form::hidden('user_id', Auth::user()->id) }}

		<div class="form-group">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ['class' => 'form-controll'] ) }}
		</div>

		<div class="form-group">
			{{ Form::label('fileName', 'Upload:') }}
			{{ Form::file('fileName') }}
		</div>

		{{ Form::submit('Upload Photo', ['class' => 'btn btn-primary']) }}

	{{ Form::close() }}
			
@stop
	