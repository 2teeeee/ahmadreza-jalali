<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('infos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('title',200)->nullable();
			$table->string('keyword',200)->nullable();
			$table->text('description')->nullable();
			$table->string('logo',200)->nullable();
			$table->string('copyright',200)->nullable();
			$table->string('icon',200)->nullable();
			$table->string('mobile',11)->nullable();
			$table->string('email',200)->nullable();
			$table->string('tel',30)->nullable();
			$table->string('address',200)->nullable();
			$table->string('fax',30)->nullable();
			$table->string('postalcode',10)->nullable();
			$table->string('lat',15)->nullable();
			$table->string('lang',15)->nullable();
			$table->string('facebook',250)->nullable();
			$table->string('instagram',250)->nullable();
			$table->string('googleplus',250)->nullable();
			$table->string('telegram',250)->nullable();
			$table->string('youtube',250)->nullable();
			$table->string('linkdin',250)->nullable();
			$table->string('aparat',250)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('infos');
	}

}
