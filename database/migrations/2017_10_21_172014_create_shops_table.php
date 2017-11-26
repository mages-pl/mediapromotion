<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->string("nazwa_sklepu",255)->nullable();
            $table->text("opis_sklepu",255)->nullable();
            $table->string("xml_sklepu",255)->nullable();
            $table->string("logo_sklepu",255)->nullable();
            $table->string("link_sklepu",255)->nullable();
            $table->float("saldo_sklepu",32)->nullable();
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
        Schema::dropIfExists('shops');
    }
}
