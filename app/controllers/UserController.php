<?php

class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Users Page
		return View::make('users.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created users.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Register a user
		$input = Input::all();

		$rules = array(
				
				'username' 	=> 'required|unique:users',
				'email'		=> 'required|unique:users|email',
				'password'	=> 'required'

			);

		$validator = Validator::make($input, $rules);

		if($validator->passes()){
			
			$password = $input['password'];
			$password = Hash::make($password);

			$user = new  User();

			$user->username = $input['username'];
			$user->email 	= $input['email'];
			$user->password = $password;
			
			$user->save();

			return Response::json(array('message' => 'success'));
			
		}else{

			return $validator->messages()->toJson();
		
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
