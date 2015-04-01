<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportCentersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('support_centers', function(Blueprint $table)
		{
			// Columns
			$table->bigIncrements('id');
			$table->unsignedBigInteger('account_id');
			$table->string('name', 255);
			$table->boolean('active');
			$table->string('picture', 1024);
			$table->json('location');
			$table->string('address', 512);
			$table->json('business_hours');
			$table->json('phones');
			$table->json('emails');
			$table->json('contacts');
			$table->string('website', 1024);
			$table->timestamps();
			$table->softDeletes();
			// Indexes
			$table->unique(array('account_id', 'name'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('support_centers');
	}

}
