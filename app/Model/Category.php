<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	public function blogs()
	{
		return $this->hasMany('App\Model\Blog','cat_id');
	}
	public function relationBlogs()
	{
		return $this->belongsToMany('App\Model\Blog');
	}
	public function category()
	{
		return $this->belongsTo('App\Model\Category','cat_id');
	}
	public function categorys()
	{
		return $this->hasMany('App\Model\Category','cat_id');
	}
}
