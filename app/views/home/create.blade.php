@extends('home.index')

@section('content')
	
	<h2>Create Page</h2>

	<div class="create" style="border:1px solid grey;">
		<article>
			<h3>Go to the store</h3>

			{{ Form::open(['data-remote','data-remote-success-message' => 'Okay its deleted!', 'method' => 'DELETE', 'route' => ['delete_task_path',1]]) }}
				
				<div class="form-group">
					{{ Form::submit('Delete Task?', ['class' => 'btn btn-default', 'data-confirm' => 'Do you really want to delete this task?']) }}
				</div>

			{{ Form::close() }}
		</article>
	</div>
	
@stop