<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Itemsoks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('itemsoks',function($table) // creo los campos de la tabla de items que se llevan
		{
			$table->create();
			
			$table->increments('id');
			
			$table->string('item',30); 			
			$table->integer('cantidad'); 
			$table->string('usuario',30);
			
			
			
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
		Schema::drop('itemsoks');
	}

}
