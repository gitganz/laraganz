<?php

class PhotosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Auth::user()){
			
			$photos = Photo::all();

			return View::make('photos.index')->with(array('photos' => $photos));

		}
	
		
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
		$input = Input::all();

		$image = new Photo();
		$image->user_id 	= $input['user_id'];
		$image->fileName 	= $input['fileName']->getClientOriginalName();
		$image->title  		= $input['title'];
		
		if($image->save()){
			
			$path = user_photos_path();

			$move_image = Image::make($input['fileName']->getRealPath());

			File::exists($path) or File::makeDirectory($path);

			$move_image->save($path.$image->fileName)
					->resize(200,200)
					->greyscale()
					->save($path. 'tn-'.$image->fileName);

			return Redirect::to('photos');	
		}else{
			return Ridirect::to('photos.create');
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
