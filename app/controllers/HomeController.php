<?php

class HomeController extends BaseController {

	public function index()
	{
		if(!Auth::check()){
			return View::make('home.index'); 
		}else{
			return Redirect::intended('blogs');
		}
		
	}

	public function create()
	{
		return View::make('home.create');
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
			return Redirect::to('/')
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
				//redirect
				return Redirect::to('blogs');

			}else{

				return Redirect::to('/');

			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}
