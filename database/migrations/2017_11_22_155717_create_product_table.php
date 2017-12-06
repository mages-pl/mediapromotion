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
            $table->float('cena_produktu')->unsigned()->nullable();
            $table->float('stara_cena_produktu')->unsigned()->nullable();
            $table->integer('ilosc_produktu')->default(0);

            $table->integer('promocja_produktu')->unsigned()->default(0);
            $table->integer('wartosc_promocji_produktu')->unsigned()->default(0);
            
            $table->integer("aktywny")->unsigned()->default(0);

            $table->integer('id_brand')->unsigned()->nullable();

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
