<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('providers', function($table)
     	{
       		$table->increments('id');
	   		$table->string('name');
	   		$table->string('cnpj');
	   		$table->string('ie');
	   		$table->string('street');
	   		$table->string('city');
	   		$table->string('state');
	   		$table->string('country');
	   		$table->integer('number');
	   		$table->integer('phone');
	   		$table->integer('cell_phone');
	   		$table->string('email');
	   		$table->string('website');
	   		$table->string('contact');
	   		$table->string('activity');
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
		Schema::drop('products');
	}

}
