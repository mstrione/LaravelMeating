<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuarios',function($table) // creo los campos de la tabla usuarios
		{
			$table->create();
			
			$table->increments('id');
			
			$table->string('username'); // es nombre, se utiliza username para usar mejor las validaciones incorporadas
			$table->string('apellido');
			$table->string('password'); // es la clave, lo mismo que username.
			$table->date('nacimiento');
			$table->string('sexo');
			$table->string('email');
			$table->string('provincia');
			$table->string('ciudad');
			$table->string('verificacion');
			$table->string('activo');
			
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
		Schema::drop('usuarios');
	}

}
