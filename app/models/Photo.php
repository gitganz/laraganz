<?php  

class Photo extends Eloquent
{
	protected $fillable = ['user_id','fileName', 'title'];

	public $timestamps = false;
}