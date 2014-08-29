<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showLogin()
	{
		return View::make('home.index');
	}

	public function doLogin()
	{
		//process the form
		//validate the info
		$rules = array(

				'email' 	=>	'required|email',
				'password' 	=>	'required|alphaNum|min:3' 
			);

		$validator = Validator::make(Input::all(), $rules);

		//if validator fails
		if ($validator->fails()){
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}else{
			//create our user
			$userdata = array(
					'email' 	=> Input::get('email'),
					'password'	=> Input::get('password')
				);
			//attempt to do login

			if (Auth::attempt($userdata)){
				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				echo "SUCCESS";
			}else{
				return Redirect::to('login');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

}
