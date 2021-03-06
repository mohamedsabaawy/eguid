<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration {

	public function up()
	{
		Schema::create('reviews', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('comment');
			$table->integer('review');
			$table->string('title');
			$table->integer('hotel_id');
			$table->integer('client_id');
		});
	}

	public function down()
	{
		Schema::drop('reviews');
	}
}
