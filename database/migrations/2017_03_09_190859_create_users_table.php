<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(Schema::hasTable('user'))
		{
			
		}
		else
		{
			Schema::create('user', function(Blueprint $table)
			{
				$table->engine = 'InnoDB';

				$table->increments('id');
				$table->String('name',100)->nullable();
				$table->string('family',100)->nullable();
				$table->string('username',100)->unique();
				$table->string('password',64);
				$table->boolean('status')->default(1);
				$table->datetime('registertime');
				$table->string('email',200)->unique();
				$table->string('mobile',20)->nullable()->unique();
				$table->string('avatar',200)->nullabe();
				$table->softDeletes();
				$table->timestamps();
				$table->rememberToken();
			});
		}
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
