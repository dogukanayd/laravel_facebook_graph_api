<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('facebook_id')->default();
			$table->string('access_token')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('age_range')->nullable();
			$table->string('link')->nullable(); //
			$table->string('gender')->nullable();
			$table->string('locale')->nullable(); //
			$table->string('picture')->nullable(); //
			$table->integer('role_id')->index()->unsigned()->nullable()->default(2);
			$table->integer('is_active')->default(1);
			$table->string('name'); //
			$table->string('email')->unique();
			$table->string('password');
			$table->longText('user_likes');
			$table->rememberToken();
			$table->timestamps();

		});
	}
	//id,cover,name,first_name,last_name,age_range,link,gender,locale,picture,timezone,updated_time,verified

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
