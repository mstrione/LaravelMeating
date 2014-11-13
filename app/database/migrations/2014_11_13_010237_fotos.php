<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fotos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fotos',function($table) // creo los campos de la tabla de las fotos
		{
			$table->create();
			
			$table->increments('id');
			
			$table->string('evento'); 			
			$table->string('titulo'); 
			$table->string('pic'); // es la imagen
			
			
			
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
