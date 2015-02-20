<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function($table)
		{
			$table->increments('id');
			$table->string('name',200);
			$table->string('unidade_medida',15);
			$table->integer('category_name', false, true);

			$table->timestamps();

			$table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('products', function($table)
		{
			$table->dropForeign('product_category_id_foreign');
		});
		
		Schema::drop('products');
	}

}