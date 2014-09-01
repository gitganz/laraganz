<?php  

class Item extends Eloquent
{
	protected $fillable = ['title', 'description', 'image'];

	public $timestamps = false;
}