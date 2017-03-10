<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts', function(Blueprint $table)
		{
		    $table->engine = 'InnoDb';
			$table->increments('id');
			$table->string('name',200);
			$table->string('email',200);
			$table->string('mobile',11);
			$table->string('subject',250);
			$table->text('text');
			$table->tinyInteger('status')->default(1);
			$table->string('ip',50);
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
		Schema::drop('contacts');
	}

}
