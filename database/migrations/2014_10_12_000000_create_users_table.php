<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         
        Schema::create('users', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('name',255);
            $table->string('email',128)->unique();
            $table->integer('role_id')->unsigned()->default(1);
            
            $table->string('password',255);
            $table->integer('status_uzytkownika')->unsigned()->nullable();
            
            $table->rememberToken();
            $table->timestamps();
       
             
        });

        Schema::table('users', function(Blueprint $table)
        {
            $table->foreign('role_id')->references('id')->on('roles');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
