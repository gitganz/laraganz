<?php

class BlogController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//get all the blogs
		$blogs = Blog::all();

		//load the view and pass the blogs
		return View::make('blogs.index')->with('blogs', $blogs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//load the create
		return View::make('blogs.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate
		$rules = array(
				'title'			=>	'required',
				'posts'			=>	'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		//process the login
		if ($validator->fails()){
			return Redirect::to('blogs/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}else{
			//store
			$blog 				= new Blog;
			$blog->title 		= Input::get('title');
			$blog->posts 		= Input::get('posts');
			$blog->save();

			//redirect
			Session::flash('message', 'Successfully created blog');
			return Redirect::to('blogs');
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
		//get the blog
		$blog = Blog::find($id);
		//show the view and pass blog to it
		return View::make('blogs.show')
			->with('blog', $blog);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//get the blog
		$blog = Blog::find($id);

		//show the edit form and pass the blog
		return View::make('blogs.edit')
			->with('blog', $blog);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//validate
		$rules = array(
				'title' 			=> 'required',
				'posts'				=> 'required'
			);

		$validator = Validator::make(Input::all(), $rules);

		//process the form
		if ($validator->fails()){
			return Redirect::to('blogs/'.$id.'/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}else{
			$blog 				= Blog::find($id);
			$blog->title 		= Input::get('title');
			$blog->posts 		= Input::get('posts');
			$blog->save();

			//redirect
			Session::flash('message', 'Successfully updated blog!');
			return Redirect::to('blogs');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//delete
		$blog = Blog::find($id);
		$blog->delete();

		//redirect
		Session::flash('message', 'Successfully deleted the blog');
		return Redirect::to('blogs');
	}


}
