<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model {

	public function user()
	{
		return $this->belongsTo('App\Model\User','user_id');
	}
	public function category()
	{
		return $this->belongsTo('App\Model\Category','cat_id');
	}
	public function relationCategorys()
	{
		return $this->belongsToMany('App\Model\Category');
	}
	public function tags()
	{
		return $this->belongsToMany('App\Model\Tag');
	}

}
