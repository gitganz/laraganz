<?php

class ItemsController extends BaseController {

	public function index()
	{
		return View::make('items.index', [

				'items' => Item::paginate(6)
			]);
	}

	

}
