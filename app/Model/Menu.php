<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {

	public function menus()
	{
		return $this->hasMany('App\Model\Menu','menu_id');
	}
	public function menu()
	{
		return $this->belongsTo('App\Model\Menu','menu_id');
	}

}
