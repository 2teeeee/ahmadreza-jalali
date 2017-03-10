<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	public function blogs()
	{
		return $this->hasMany('App\Model\Blog','user_id');
	}

}
