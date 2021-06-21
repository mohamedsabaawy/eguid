<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLandmarksTable extends Migration {

	public function up()
	{
		Schema::create('landmarks', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name')->nullable();
			$table->text('details')->nullable();
			$table->string('cover')->nullable();
			$table->integer('city_id');
			$table->integer('user_id');
			$table->decimal('latitude', 10,8)->nullable();
			$table->decimal('longitude', 10,8)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('landmarks');
	}
}
