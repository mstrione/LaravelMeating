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
			
			$table->string('evento', 30); 
			$table->string('usuario');
			$table->string('rol',10); 
			$table->integer('menores');
			$table->integer('adultos');
			$table->boolean('confirmado');
			$table->boolean('notificado');
			$table->double('costo');
			$table->double('gasto');
			
			
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
		Schema::drop('invitados');
	}

}
