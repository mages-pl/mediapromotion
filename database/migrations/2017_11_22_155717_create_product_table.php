<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign("user_id")->references('id')->on("users");

            $table->string('nazwa_produktu',255)->nullable();
            $table->string('sku_produktu',32)->nullable();
            $table->string('ean_produktu',16)->nullable();
            $table->text('opis_produktu',1024)->nullable();
            $table->string('obrazek_produktu',255)->nullable();
            $table->string('kategoria_produktu',255)->nullable();
            $table->string('url_produktu',255)->nullable();
            $table->string('cena_produktu',32)->nullable();

            $table->string('promocja_produktu',1)->nullable();
            $table->string('wartosc_promocji_produktu',3)->nullable();
            

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
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
