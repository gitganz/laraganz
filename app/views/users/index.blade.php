@extends('layouts.default')

@section('content')
	<div class="users_list">
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
		</div>
	</div>
@stop