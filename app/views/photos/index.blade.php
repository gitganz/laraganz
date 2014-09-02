@extends('layouts.default')

@section('content')

	<div class="images">
		<h2>Photos</h2>

		@foreach($photos as $photo)
			<img src="/images/admin/{{ $photo->fileName }}" alt="{{ $photo->title }}">
			<img src="/images/admin/tn-{{ $photo->fileName }}" alt="thumbnail">
		@endforeach
	
	</div>

@stop