<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	public function blogs()
	{
		return $this->belongsToMany('App\Model\Blog');
	}

}
