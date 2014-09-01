@extends('layouts.default')

@section('content')
	
	<div class="container">
	
		<h2>Items</h2>

		@foreach(array_chunk($items->getCollection()->all(), 3) as $row)

			<div class="row">
				
				@foreach($row as $item)
					
					<article class="col-md-4">

						<h2>{{ $item->title }}</h2>

						<img src="{{ $item->image }}" alt="{{ $item->title }}">

						<div class="body">
							
							{{ $item->description }}

						</div>
						
					</article>

				@endforeach

			</div>
			
		@endforeach
	
		{{ $items->appends(Request::except('page'))->links() }} 
		
	</div>
	<!-- end of container items page -->
@stop

	<!--  $items->appends(['difficulty' => 'beginner'])->links()  -->
	<!--  dd(Request::only('difficulty'))  -->
	<!-- $items->appends(Request::only('difficulty'))->links() -->