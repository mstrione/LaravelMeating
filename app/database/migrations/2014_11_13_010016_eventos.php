<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('eventos',function($table) // creo los campos de la tabla eventos
		{
			$table->create();
			
			$table->increments('id');
			
			$table->string('nombre'); 
			$table->string('lugar');
			$table->date('fecha'); 
			$table->time('hora');
			$table->string('descripcion');
			$table->string('cerrado');
			$table->string('creador');
			$table->string('latitud');
			$table->string('longitud');
			$table->string('metodocuenta');
			
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
