<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->string('full_name');
            
            $table->timestamps();
        });

        Schema::create('categories', function($table)
        {
            $table->increments('id');
            $table->string('desc', 100); 
            $table->timestamps();
        });

        Schema::create('bookmarks', function($table)
        {
            $table->increments('id')->unique();
            $table->integer('idcat')->unsigned();
            $table->integer('iduser')->unsigned();
            $table->string('desc', 100); 
            $table->timestamps();

            $table->foreign('iduser')
      			->references('id')->on('users')
      			->onDelete('cascade');

      		$table->foreign('idcat')
      			->references('id')->on('categories')
      			->onDelete('cascade');
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('categories');
		Schema::drop('bookmarks');
	}

}