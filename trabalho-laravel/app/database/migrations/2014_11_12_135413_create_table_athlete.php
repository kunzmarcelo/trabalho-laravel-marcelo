<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAthlete extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('athlete',function(Blueprint $table){
            $table->increments('id') ;
            $table->string('name');
            $table->string('address');
            $table->date('birth_date');
            $table->string('phone');
            $table->string('email');
            $table->string('CPF');
            $table->string('RG');
            $table->string('burg');
            $table->string('sex');
            $table->string('name_father');
            $table->string('name_mother');            
            $table->integer('team');
            $table->integer('city');
            
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('athlete');
	}

}
