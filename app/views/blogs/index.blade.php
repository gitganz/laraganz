@extends('layouts.default');

@section('content');

	<h1>Blog Posts</h1>

	<!-- will be used to show any messages -->
	@if (Session::has('message'))
		<div class="alert alert-info">{{ Session::get('message') }}</div>
	@endif

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Title</td>
				<td>Posts</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody>
			@foreach($blogs as $key => $value)
				<tr>
					<td>{{ $value->id }}</td>
					<td>{{ $value->title }}</td>
					<td>{{ $value->posts }}</td>
	
					<!-- we will also add show, edit, and delete buttons -->
					<td>

						{{ Form::open(array('url' => 'blogs/' . $value->id, 'class' => 'pull-right')) }}
							{{ Form::hidden('_method', 'DELETE') }}
							{{ Form::submit('Delete this Post', array('class' => 'btn btn-warning')) }}
						{{ Form::close() }}

						<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
						<a class="btn btn-small btn-success" href="{{ URL::to('blogs/' . $value->id) }}">Show this Post</a>

						<!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
						<a class="btn btn-small btn-info" href="{{ URL::to('blogs/' . $value->id . '/edit') }}">Edit Post</a>

					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop		


