<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Items extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('items',function($table) // creo los campos de la tabla items
		{
			$table->create();
			
			$table->increments('id');
			
			$table->string('evento'); 
			$table->string('descripcion');
			$table->string('cantidad'); 
			
			
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
		//
	}

}
