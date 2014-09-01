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
			@show
		
		    /*body { font-size: 62.5%; }*/
		    body { font-size: 100%; }
		    label, input { display:block; }
		    input.text { margin-bottom:12px; width:95%; padding: .4em; }
		    fieldset { padding:0; border:0; margin-top:25px; }
		    h1 { font-size: 1.2em; margin: .6em 0; }
		    div#users-contain { width: 350px; margin: 20px 0;}
		    div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
		    div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
		    .ui-dialog .ui-state-error { padding: .3em; }
		    .validateTips { border: 1px solid transparent; padding: 0.3em; }
		 </style>
	</head>
	<body>
		<div class="container">

			<a href="#" class="click_modal">Login</a>

			{{ Form::open(array('url' => 'dologin')) }}
				<h1>Login</h1>

				<!-- if there are login errors, show them here -->
				<p>
					<span class="error">{{ $errors->first('email') }}</span>
					<span class="error">{{ $errors->first('password') }}</span>
				</p>

				<p>
					{{ Form::label('email', 'Email Address') }}
					{{ Form::email('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
				</p>

				<p>
					{{ Form::label('password', 'Password') }}
					{{ Form::password('password') }}
				</p>

				<p>{{ Form::submit('Login') }}</p>
			
			{{ Form::close() }}

			<div id="users-contain" class="ui-widget">
			  <h1>Existing Users:</h1>
			  <table id="users" class="ui-widget ui-widget-content">
			    <thead>
			      <tr class="ui-widget-header ">
			        <th>Name</th>
			        <th>Email</th>
			        <th>Password</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>John Doe</td>
			        <td>john.doe@example.com</td>
			        <td>johndoe1</td>
			      </tr>
			    </tbody>
			  </table>

			  <button id="create-user">Create new user</button>
			  
			</div>
		

		</div>

		<div id="dialog-form" title="Create new user">
		  <p class="validateTips">All form fields are required.</p>
		 
		  <form>
		    <fieldset>
		      <label for="name">Name</label>
		      <input type="text" name="name" id="name" value="Jane Smith" class="text ui-widget-content ui-corner-all">
		      <label for="email">Email</label>
		      <input type="text" name="email" id="email" value="janesss@smithsss.com" class="text ui-widget-content ui-corner-all">
		      <label for="password">Password</label>
		      <input type="password" name="password" id="password" value="xxxxxxx" class="text ui-widget-content ui-corner-all">
		 
		      
		      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
		    </fieldset>
		  </form>
		</div>


		
		{{ HTML::script('js/jquery-1.11.1.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
		{{ HTML::script('js/jquery_ui_11/jquery-ui.js') }}
		{{ HTML::script('js/main.js') }}

	</body>
</html>