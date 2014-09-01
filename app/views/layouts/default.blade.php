<!DOCTYPE html>
<html>
	<head>
		<title>Post a BLog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"> -->
		<style type="text/css">
			.form-control{width:500px;}
			.error{color:red;}
		</style>

		<!-- css here -->
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap-theme.css') }}

		<style>
			@section('styles')
				body{ padding-top:40px;}
			@show
		</style>
	</head>
	<body>
		
		
		<div class="container">
			
			<h4>Hello,  {{ ucwords(Auth::user()->username) }}</h4>

			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::to('blogs') }}">Blog Alert</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::to('blogs') }}">View All Blogs</a></li>
					<li><a href="{{ URL::to('blogs/create') }}">Create a Blog</a></li>
					<li><a href="{{ URL::to('users') }}">Users</a></li>
					<li><a href="{{ URL::to('items') }}">Items</a></li>
					<li><a href="{{ URL::to('photos') }}">Photos</a></li>
					<li><a href="{{ URL::to('logout') }}">Logout</a></li>
				</ul>
			</nav>
		
			@yield('content')
		
		</div>

	</body>
</html>


