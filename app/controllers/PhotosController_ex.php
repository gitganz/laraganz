<?php

class PhotosController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('photos.index')->withInput('img', $input);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('photos.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$image = new Photo;
		
		$input = Input::all();

		$fileName = $input['fileName']->getClientOriginalName();

		$path = user_photos_path();

		// dd(Input::all() ['fileName']);

		//validation for uploading image
		//if good to go
		$image = Image::make($input['fileName']->getRealPath());

		File::exists($path) or File::makeDirectory($path);

		$image->save($path . $fileName)
				->resize(200, 200)
				->greyscale()
				->save($path. 'tn-' .$fileName);
		
				

		return Redirect::to('photos');
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
