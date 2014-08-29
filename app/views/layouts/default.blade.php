<!DOCTYPE html>
<html>
	<head>
		<title>Post a BLog</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<style type="text/css">
			.form-control{width:500px;}
		</style>
	</head>
	<body>

		<div class="container">

			<nav class="navbar navbar-inverse">
				<div class="navbar-header">
					<a class="navbar-brand" href="{{ URL::to('blogs') }}">Blog Alert</a>
				</div>
				<ul class="nav navbar-nav">
					<li><a href="{{ URL::to('blogs') }}">View All Blogs</a></li>
					<li><a href="{{ URL::to('blogs/create') }}">Create a Blog</a>
				</ul>
			</nav>
		
			@yield('content')
		
		</div>
	</body>
</html>

