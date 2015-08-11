<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAbsenRplTable extends Migration {

	public function up()
	{
		Schema::create('absen_rpl', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('noreg', 10)->unique();
			$table->string('nama', 100);
			$table->string('prodi', 100);
			$table->text('keterangan');
		});
	}

	public function down()
	{
		Schema::drop('absen_rpl');
	}
}