<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCellphonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cellphones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('model');
			$table->string('trade_mark');
			$table->string('company');
			$table->string('imei');
			$table->string('plan_name');
			$table->string('plan_description');
			$table->float('plan_cost');
			$table->float('plan_iva_cost');
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
		Schema::drop('cellphones');
	}

}
