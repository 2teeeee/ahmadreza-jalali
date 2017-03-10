<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sliders', function(Blueprint $table)
		{
		    $table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('title',200);
			$table->text('text')->nullable();
			$table->string('image',200);
			$table->tinyInteger('status')->default(1);
			$table->integer('displayindex')->dafault(1);
			$table->softDeletes();
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
		Schema::drop('sliders');
	}

}
