<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Invitados extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('invitados',function($table) // creo los campos de la tabla invitados
		{
			$table->create();
			
			$table->increments('id');
			
			$table->string('evento'); 
			$table->string('usuario');
			$table->string('rol'); 
			$table->string('menores');
			$table->string('adultos');
			$table->string('confirmado');
			$table->string('notificado');
			$table->string('costo');
			$table->string('gasto');
			
			
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
