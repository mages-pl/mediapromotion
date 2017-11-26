<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign("user_id")->references('id')->on("users")->onDelete('cascade');

            $table->string('nazwa_firmy',255)->nullable();
            $table->text('adres_firmy',255)->nullable();
            $table->string('miasto_firmy',255)->nullable();
            $table->string('kod_pocztowy_firmy',32)->nullable();
            $table->string('telefon_firmy',32)->nullable();
            $table->string('nip_firmy',32)->nullable();
            $table->string('regon_firmy',32)->nullable();


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
        Schema::dropIfExists('settings');
    }
}
