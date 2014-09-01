<!doctype html>
<html>
	<head>
		<title>Login</title>
		<!-- css here -->
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap-theme.css') }}
		{{ HTML::style('js/jquery_ui_11/jquery-ui.css') }}

		<style type="text/css">
			@section('styles')
				body{ padding-top:30px;}
				.error{color:red;}
				p{width:300px;}
				.flash{display:inline-block;position:absolute;bottom:15px;right:15px;z-index:100;}
			@show
		</style>
	</head>
	<body>
		@include('home.flash')

		<div class="container">

			{{ Form::open(array('url' => 'dologin')) }}
				<h1>Login</h1>

				<!-- if there are login errors, show them here -->
				<p>
					<span class="error">{{ $errors->first('email') }}</span>
					<span class="error">{{ $errors->first('password') }}</span>
				</p>

				<p>
					{{ Form::label('email', 'Email Address') }}
					{{ Form::email('email', Input::old('email'), ['class' => 'form-control']) }}
				</p>

				<p>
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password',['class' => 'form-control']) }}
				</p>

				<p>{{ Form::submit('Login', ['class' => 'btn btn-default']) }}</p>
			
			{{ Form::close() }}

			<button id="create-user" class="btn btn-default">Create new user</button>
			  
			@yield('content')
			  
		</div>

		<div id="form1" style="display:none;">

		 	<span class="errors"></span>

		 	{{ Form::open(['data-remote','route' => 'users.store', 'data-remote-success-message' => 'User Successfully registered!']) }}
				
				<div class="form-group">
					{{ Form::label('username', 'Username:') }}
					{{ Form::text('username','', ['class' => 'form-control']) }}
				</div>

				<div class="form-group">
					{{ Form::label('email', 'Email:') }}
					{{ Form::email('email','', ['class' => 'form-control']) }}
				</div>

				<p>
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password',['class' => 'form-control']) }}
				</p>


				<div class="form-group">{{ Form::submit('Register',['class' => 'btn btn-default','data-confirm' => 'Are you sure about that?']) }}</div>

		 	{{ Form::close() }}

		</div>

		
		{{ HTML::script('js/jquery-1.11.1.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/jquery_ui_11/jquery-ui.js') }}
		{{ HTML::script('js/main.js') }}

	</body>
</html>