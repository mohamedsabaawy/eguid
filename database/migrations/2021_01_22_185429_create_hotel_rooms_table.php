<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHotelRoomsTable extends Migration {

	public function up()
	{
		Schema::create('hotel_rooms', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('price');
			$table->integer('hotel_id')->unsigned();
			$table->integer('client_id')->nullable();
			$table->integer('type_id')->nullable();
			$table->integer('number');
			$table->integer('view_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('hotel_rooms');
	}
}
