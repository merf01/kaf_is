<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
						$table->string('slug')->nullable();
            $table->text('description');
            $table->string('status');
            $table->string('video')->nullable();
            $table->string('img1')->nullable();
						$table->jsonb('images')->nullable();
					//	$table->text('images')->nullable();
						$table->unsignedInteger('user_id');
            $table->timestamps();
						$table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
