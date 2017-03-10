<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('title',200);
			$table->text('littletext')->nullable();
			$table->longText('text')->nullable();
			$table->string('avatar',200)->nullable();
			$table->integer('user_id')->unsigned();
			$table->integer('counter')->default(0);
			$table->tinyInteger('status')->default(1);
			$table->integer('displayindex')->default(1);
			$table->string('keyword',200)->nullable();
			$table->text('description')->nullable();
			$table->integer('cat_id')->unsigned();
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
		Schema::drop('blogs');
	}

}
